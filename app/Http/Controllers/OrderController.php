<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\Tickets;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketInformation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order_ticket(Request $request)
    {
        $ticket = $request->session()->get('ticket');
        return view('layout.order_ticket',['ticket' => $ticket]);
    }


    public function payment(Request $request)
    {
        $data = $request->session()->get('ticket');

        $faker = Faker::create();

        $validated = $request->validate([
            'cardnumber' => 'required',
            'cardname' => 'required|string',
            'expiration_date' => 'required',
            'cvv' => 'required',
        ], [
            'cardnumber.required' => 'Vui lòng nhập số thẻ',
            'cardname.required' => 'Vui lòng nhập tên chủ thẻ',
            'expiration_date.required' => 'Vui lòng nhập ngày hết hạn',
            'cvv.required' => 'Vui lòng nhập mã CVV',
        ]);

        $Result = [
            'success' => $faker->boolean(100),
            'message' => $faker->sentence(),
            'transaction_id' => $faker->uuid(),
        ];

        if ($Result['success']) {
            $ticket = new Tickets();
            $ticket->order = $data['order'];
            $ticket->quantity = $data['quantity'];
            $ticket->date = $data['date'] = Carbon::createFromFormat('m/d/Y', $data['date'])->format('Y-m-d');
            $ticket->fullname = $data['fullname'];
            $ticket->phonenumber = $data['phone'];
            $ticket->price = $data['price'];
            $ticket->email = $data['email'];
            $ticket->qrcode = substr(md5(uniqid()), 0, 7) . rand(100, 999);
            $ticket->save();

            $request->session()->put('ticket_id', $ticket->id);
            
            return redirect()->route('payment-success')->with('success', 'Thanh toán thành công!');
        } 
        else {
            return view('layout.order_ticket', ['ticket' => $data])->withErrors(['fail' => 'Thanh toán thất bại !']);
        }      
    }

    public function payment_success(Request $request)
    {
        $id = $request->session()->get('ticket_id');
        $ticket = Tickets::where('id', $id)->first();
        $quantity = $ticket->quantity;
        $tickets = [];
        for ($i = 0; $i < $quantity; $i++) {
            $tickets[] = [
                'id' => $ticket->id,
                'qrcode' => $ticket->qrcode,
                'date' => $ticket->date,
            ];
        }
        
        $perPage = 4; 
        $pagedTickets = array_chunk($tickets, $perPage); 
        
        $currentPage = $request->query('page', 1); 
        $totalPages = count($pagedTickets); 
        
        $displayticket = $pagedTickets[$currentPage - 1];
        
        return view('layout.payment_success', compact('displayticket', 'quantity', 'currentPage', 'totalPages'));
    }

    public function sendticket(Request $request){
        $id = $request->session()->get('ticket_id');
        $ticket = Tickets::where('id', $id)->first();
        $quantity_ticket = $ticket->quantity;
        $tickets = [];
        for ($i = 0; $i < $quantity_ticket; $i++) {
            $tickets[] = [
                'id' => $ticket->id,
                'qrcode' => $ticket->qrcode,
                'date' => $ticket->date,
                'order' => $ticket->order,
                'price' => $ticket->price,
            ];
        }
        
        Mail::to($ticket->email)->send(new TicketInformation($tickets));

        $request->session()->flash('success', 'Gửi email thành công!');
        return back();
    }
}

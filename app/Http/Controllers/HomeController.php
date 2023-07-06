<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $orders = Orders::all();
        return view('layout.home',compact('orders'));
    }


    public function order(Request $request)
    {
        $data = $request -> validate([
            'order' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'fullname' => 'required',
            'phone' => 'required', 
            'email' => 'required',
            'price' => 'required',
        ]);
        $request->session()->put('ticket', $data);

        return view('layout.order_ticket',['ticket' => $data]);
    }

}

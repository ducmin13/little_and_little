<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('layout.contact');
    }

    public function send(Request $request)
    {
        try {
            $contact = Contacts::create($request->all());
            $contacts = [];
            $contacts[] = [
                'id' => $contact->id,
                'name' => $contact->name,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'address' => $contact->address,
                'message' => $contact->message,
            ];
            $mailContact = new MailContact($contacts);
            Mail::to('ngoducminh1305@gmail.com')->send($mailContact);
            return redirect('/contact')->with('contact_success', 'Gửi liên hệ thành công');
        } catch (Exception $ex) {
             return redirect()->back()->withErrors(['contact_error' => 'Gửi thất bại']);
        }
    }
}

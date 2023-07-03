<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        return view('layout.order_ticket');
    }

    public function order_success()
    {
        return view('layout.order_success');
    }
}

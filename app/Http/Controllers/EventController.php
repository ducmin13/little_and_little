<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
        return view('layout.event');
    }

    public function event_detail()
    {
        return view('layout.event_detail');
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function event()
    {
        $events = Events::paginate(4);
        return view('layout.event',compact('events'));
    }

    public function event_detail($id)
    {
        $events = DB::table('events')->where('id', $id)->get();
        return view('layout.event_detail',compact('events'));
    }
}

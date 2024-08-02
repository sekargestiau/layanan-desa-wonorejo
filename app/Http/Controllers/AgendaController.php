<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 

class AgendaController extends Controller
{
    public function getEvents()
    {
        $events = Event::all();

        return response()->json($events);
    }

    public function storeEvent(Request $request)
    {
        $event = Event::create([
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'all_day' => $request->all_day,
        ]);

        return response()->json($event);
    }
}







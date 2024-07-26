<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Show the form for adding event details.
     *
     * @return \Illuminate\View\View
     */
    public function showDetailsPage()
    {
        return view('agenda.details');
    }


    public function storeDetails(Request $request)
{
    // Validate and save the data
    $validatedData = $request->validate([
        'eventName' => 'required|max:255',
        'eventDate' => 'required|date',
        'eventTime' => 'required',
        'eventLocation' => 'required|max:255',
    ]);

    // Store event details logic here

    return redirect()->route('agenda.details')->with('success', 'Event details saved successfully!');
}

    // Other methods can be added here
}

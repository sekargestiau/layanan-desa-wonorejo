<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Import the Event model

class CalendarController extends Controller
{
    /**
     * Show the form for adding event details.
     *
     * @return \Illuminate\View\View
     */
    public function showDetailsPage()
    {
        $title = 'Menambah Event';
        return view('agenda.details', compact('title'));
    }

    /**
     * Store the event details.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeDetails(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'eventName' => 'required|string|max:255',
        'eventDate' => 'required|date|date_format:Y-m-d',
        'eventTime' => 'required|date_format:H:i',
        'eventEndDate' => 'required|date|date_format:Y-m-d',
        'eventEndTime' => 'required|date_format:H:i',
        'eventLocation' => 'required|string|max:255',
    ]);

    try {
        // Combine date and time to create datetime values
        $startDateTime = $validatedData['eventDate'] . ' ' . $validatedData['eventTime'];
        $endDateTime = $validatedData['eventEndDate'] . ' ' . $validatedData['eventEndTime'];

        // Store event details in the database
        $event = new Event();
        $event->name = $validatedData['eventName'];
        $event->start_datetime = $startDateTime; // Ensure your database column is named `start_datetime`
        $event->end_datetime = $endDateTime;     // Ensure your database column is named `end_datetime`
        $event->location = $validatedData['eventLocation'];
        $event->save();

        return response()->json([
            'id' => $event->id,
            'eventName' => $event->name,
            'start' => $event->start_datetime,
            'end' => $event->end_datetime,
            'eventLocation' => $event->location
        ]);
    } catch (\Exception $e) {
        // Log the error and return a user-friendly message
        \Log::error('Failed to save event details: ' . $e->getMessage());

        return response()->json(['error' => 'Failed to save event details. Please try again later.'], 500);
    }
}


    /**
     * Fetch events for the calendar.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchEvents()
    {
        // Retrieve all events from the database
        $events = Event::all()->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->name,
                'start' => $event->event_datetime,
                'extendedProps' => [
                    'location' => $event->location
                ]
            ];
        });

        return response()->json($events);
    }

    public function deleteEvent(Request $request)
{
    $id = $request->input('id');
    
    // Assuming you have a model called Event and it uses the 'id' as its primary key
    $event = Event::find($id);
    if ($event) {
        $event->delete();
        return response()->json(['success' => true]);
    }
    
    return response()->json(['success' => false], 404);
}

}

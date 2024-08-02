<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    /**
     * Show the main agenda listing page.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $events = Event::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('location', 'like', "%{$search}%");
        })->paginate(10);

        return view('agenda.list', compact('events'));
    }

    /**
     * Show the form for adding event details.
     *
     * @return \Illuminate\View\View
     */
    public function showDetailsPage()
    {
        $title = 'Add Event';
        return view('agenda.details', compact('title'));
    }

    /**
     * Store the event details.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
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
            $event->start_datetime = $startDateTime;
            $event->end_datetime = $endDateTime;
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
                'start' => $event->start_datetime,
                'end' => $event->end_datetime,
                'extendedProps' => [
                    'location' => $event->location
                ]
            ];
        });

        return response()->json($events);
    }

    /**
     * Delete an event.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        \Log::info('Attempting to delete event with ID: ' . $id);

        try {
            $event = Event::find($id);
            if ($event) {
                $event->delete();
                \Log::info('Event deleted successfully.');
                return response()->json(['success' => true]);
            } else {
                \Log::warning('Event not found with ID: ' . $id);
                return response()->json(['success' => false, 'message' => 'Event not found'], 404);
            }
        } catch (\Exception $e) {
            \Log::error('Error deleting event: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'An error occurred while deleting the event.'], 500);
        }
    }
}

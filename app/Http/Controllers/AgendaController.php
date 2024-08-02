<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class AgendaController extends Controller
{
    /**
     * Fetch all events.
     *
     * @return JsonResponse
     */
    public function getEvents(): JsonResponse
    {
        $events = Event::all();
        return response()->json($events);
    }

    public function create()
{
    $title = 'Tambah Agenda'; // Define the title
    return view('agenda.tambah', compact('title')); // Pass the title to the view
}

    /**
     * Store a new event.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function storeEvent(Request $request): JsonResponse
{
    // Validate the request
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'start' => 'required|date',
        'end' => 'nullable|date|after_or_equal:start',
        'all_day' => 'required|boolean',
        'location' => 'nullable|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'errors' => $validator->errors()
        ], 422); // Unprocessable Entity
    }

    // Create the event
    try {
        $event = Event::create([
            'title' => $request->input('title'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'all_day' => $request->input('all_day'),
            'location' => $request->input('location'),
        ]);

        return response()->json($event, 201); // Created
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'An error occurred while creating the event.',
            'message' => $e->getMessage()
        ], 500); // Internal Server Error
    }
}

    public function destroy(Request $request): JsonResponse
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|exists:events,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422); // Unprocessable Entity
        }

        try {
            $event = Event::findOrFail($request->input('id'));
            $event->delete();

            return response()->json([
                'message' => 'Event successfully deleted.'
            ], 200); // OK
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred while deleting the event.',
                'message' => $e->getMessage()
            ], 500); // Internal Server Error
        }
    }

}







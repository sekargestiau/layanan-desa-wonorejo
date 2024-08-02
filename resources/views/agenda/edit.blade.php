@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Event</h1>

    <form action="{{ route('agenda.update', $event->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-4">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="eventName" class="block text-sm font-medium text-gray-700">Event Name</label>
            <input type="text" name="eventName" id="eventName" value="{{ $event->name }}"
                   class="p-2 border rounded w-full" required>
        </div>

        <div class="mb-4">
            <label for="eventDate" class="block text-sm font-medium text-gray-700">Event Start Date</label>
            <input type="date" name="eventDate" id="eventDate" value="{{ date('Y-m-d', strtotime($event->start_datetime)) }}"
                   class="p-2 border rounded w-full" required>
        </div>

        <div class="mb-4">
            <label for="eventTime" class="block text-sm font-medium text-gray-700">Event Start Time</label>
            <input type="time" name="eventTime" id="eventTime" value="{{ date('H:i', strtotime($event->start_datetime)) }}"
                   class="p-2 border rounded w-full" required>
        </div>

        <div class="mb-4">
            <label for="eventEndDate" class="block text-sm font-medium text-gray-700">Event End Date</label>
            <input type="date" name="eventEndDate" id="eventEndDate" value="{{ date('Y-m-d', strtotime($event->end_datetime)) }}"
                   class="p-2 border rounded w-full" required>
        </div>

        <div class="mb-4">
            <label for="eventEndTime" class="block text-sm font-medium text-gray-700">Event End Time</label>
            <input type="time" name="eventEndTime" id="eventEndTime" value="{{ date('H:i', strtotime($event->end_datetime)) }}"
                   class="p-2 border rounded w-full" required>
        </div>

        <div class="mb-4">
            <label for="eventLocation" class="block text-sm font-medium text-gray-700">Event Location</label>
            <input type="text" name="eventLocation" id="eventLocation" value="{{ $event->location }}"
                   class="p-2 border rounded w-full" required>
        </div>

        <button type="submit" class="bg-green-500 text-white p-2 rounded">Update Event</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>

    <div class="bg-white shadow-md rounded-lg p-4">
        <p><strong>Name:</strong> {{ $event->name }}</p>
        <p><strong>Start Date:</strong> {{ $event->start_datetime }}</p>
        <p><strong>End Date:</strong> {{ $event->end_datetime }}</p>
        <p><strong>Location:</strong> {{ $event->location }}</p>

        <a href="{{ route('agenda.index') }}" class="bg-blue-500 text-white p-2 rounded mt-4 inline-block">Back to List</a>
    </div>
</div>
@endsection

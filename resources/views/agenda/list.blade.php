@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>

    <!-- Search Bar -->
    <form method="GET" action="{{ route('agenda.index') }}" class="mb-4 flex items-center">
        <input 
            type="text" 
            name="search" 
            value="{{ request('search') }}" 
            placeholder="Search activities..." 
            class="p-2 border rounded w-full"
            aria-label="Search agenda"
        />
        <button type="submit" class="ml-2 p-2 bg-green-500 text-white rounded hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500" aria-label="Search">Search</button>
    </form>

    <!-- Agenda List -->
    <div class="mb-4">
        @if($agendas->isEmpty())
            <p class="text-gray-600">No agenda found.</p>
        @else
            <ul class="space-y-4">
                @foreach($agendas as $agenda)
                    <li class="p-4 border rounded bg-white shadow-sm hover:shadow-md transition-shadow">
                        <h2 class="text-xl font-semibold">{{ $agenda->title }}</h2>
                        <p class="text-gray-600">{{ $agenda->description }}</p>
                        <div class="mt-2 flex space-x-4">
                            <a href="{{ route('agenda.show', $agenda->id) }}" class="text-blue-500 hover:text-blue-600">View Details</a>
                            <a href="{{ route('agenda.edit', $agenda->id) }}" class="text-yellow-500 hover:text-yellow-600">Edit</a>
                            <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
            {{ $agendas->links() }} <!-- Pagination links -->
        @endif
    </div>
</div>
@endsection

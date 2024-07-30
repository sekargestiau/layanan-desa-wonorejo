@extends('agenda.components.main')

@section('content')
<div class="container mt-5">
    <nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700 text-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
          <li>
            <div class="flex items-center">
              <a href="/agenda" class="ms-1 text-2xl font-semibold text-white">Agenda Kegiatan Desa</a>
            </div>
          </li>
        </ol>
    </nav>

    <form method="POST" action="{{ route('agenda.storeDetails') }}">
        @csrf
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-info text-white">
                    <tr>
                        <th>Event Name</th>
                        <th>Event Date</th>
                        <th>Event Time</th>
                        <th>Event Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control" id="eventName" name="eventName" placeholder="Enter event name" required></td>
                        <td><input type="date" class="form-control" id="eventDate" name="eventDate" required></td>
                        <td><input type="time" class="form-control" id="eventTime" name="eventTime" required></td>
                        <td><input type="text" class="form-control" id="eventLocation" name="eventLocation" placeholder="Enter event location" required></td>
                        <td><button type="submit" class="btn btn-primary">Save Event</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
@endsection

@extends('agenda.components.main')

@section('content')
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700 text-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
            <li>
                <div class="flex items-center">
                    <a href="{{ route('agenda.index') }}" class="ms-1 text-2xl font-semibold text-white">Agenda Kegiatan Desa</a>
                </div>
            </li>
        </ol>
    </nav>

    <div id="calendar" style="max-width: 1200px; margin: 20px auto;"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '{{ route('events.get') }}', // use the named route
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                selectMirror: true,
                select: function(arg) {
                    var title = prompt('Event Title:');
                    if (title) {
                        $.ajax({
                            url: '{{ route('events.store') }}',
                            type: 'POST',
                            data: {
                                title: title,
                                start: arg.start.toISOString(),
                                end: arg.end ? arg.end.toISOString() : null,
                                all_day: arg.allDay,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                calendar.addEvent({
                                    id: response.id,
                                    title: response.title,
                                    start: response.start,
                                    end: response.end,
                                    allDay: response.all_day
                                });
                                calendar.unselect();
                            }
                        });
                    }
                },
                eventClick: function(arg) {
                    if (confirm('Are you sure you want to delete this event?')) {
                        arg.event.remove();
                    }
                }
            });

            calendar.render();
        });
    </script>
@endsection

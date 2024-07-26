@extends('agenda.components.main')
@section('content')
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>

    <nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
          <li>
            <div class="flex items-center">
              <a href="/posyandu/balita" class="ms-1 text-xl font-medium">Agenda Kegiatan Desa</a>
            </div>
          </li>
        </ol>
      </nav>

    <div id="calendar" style="max-width: 1200px; margin: 20px auto;"></div>

    <!-- Modal for displaying event details -->
    <div id="eventDetailsModal" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background-color:white; padding:20px; border:1px solid #ccc; border-radius:5px; box-shadow:0px 0px 10px rgba(0,0,0,0.5);">
        <h2 id="modalTitle"></h2>
        <p><strong>Start:</strong> <span id="modalStart"></span></p>
        <p><strong>End:</strong> <span id="modalEnd"></span></p>
        <p><strong>Location:</strong> <span id="modalLocation"></span></p>
        <button onclick="closeModal()">Close</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                    {
                        id: '1',
                        title: 'Lunch Meeting',
                        start: '2024-07-26T12:00:00',
                        end: '2024-07-26T13:30:00',
                        extendedProps: {
                            location: 'Cafe'
                        }
                    },
                    {
                        id: '2',
                        title: 'Coding Session',
                        start: '2024-07-26T15:00:00',
                        end: '2024-07-26T18:00:00',
                        extendedProps: {
                            location: 'Office'
                        }
                    }
                ],
                editable: true,
                selectable: true,
                eventClick: function(info) {
                    // Display event details in the modal
                    document.getElementById('modalTitle').innerText = info.event.title;
                    document.getElementById('modalStart').innerText = info.event.start.toLocaleString();
                    document.getElementById('modalEnd').innerText = info.event.end.toLocaleString();
                    document.getElementById('modalLocation').innerText = info.event.extendedProps.location;

                    // Show the modal
                    document.getElementById('eventDetailsModal').style.display = 'block';
                },
                select: function(info) {
                    var title = prompt('Enter event title:');
                    var location = prompt('Enter event location:');
                    if (title) {
                        calendar.addEvent({
                            title: title,
                            start: info.startStr,
                            end: info.endStr,
                            extendedProps: {
                                location: location
                            }
                        });
                    }
                    calendar.unselect();
                }
            });

            calendar.render();
        });

        function closeModal() {
            document.getElementById('eventDetailsModal').style.display = 'none';
        }
    </script>
@endsection

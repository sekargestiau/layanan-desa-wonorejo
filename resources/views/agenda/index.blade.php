@extends('agenda.components.main')
@section('content')
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700 text-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
          <li>
            <div class="flex items-center">
              <a href="/agenda" class="ms-1 text-2xl font-semibold text-white">Agenda Kegiatan Desa</a>
            </div>
          </li>
        </ol>
    </nav>

    <div id="calendar" style="max-width: 1200px; margin: 20px auto;"></div>

    <!-- Modal for displaying event details -->
    <div class="modal fade" id="eventDetailsModal" tabindex="-1" aria-labelledby="eventDetailsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Event Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Start:</strong> <span id="modalStart"></span></p>
                    <p><strong>End:</strong> <span id="modalEnd"></span></p>
                    <p><strong>Location:</strong> <span id="modalLocation"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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
                        title: 'DL Proker',
                        start: '2024-08-09T15:00:00',
                        end: '2024-08-09T18:00:00',
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
                    $('#eventDetailsModal').modal('show');
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
            $('#eventDetailsModal').modal('hide');
        }
    </script>
@endsection

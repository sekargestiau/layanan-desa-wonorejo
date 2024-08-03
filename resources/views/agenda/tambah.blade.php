@extends('agenda.components.main')

@section('content')
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        .modal-content {
            border-radius: 0.5rem;
            border: 1px solid #dee2e6;
        }

        .modal-header {
            background-color: #f1f1f1;
            border-bottom: 1px solid #ddd;
        }

        .modal-title {
            font-size: 1.25rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-primary:hover, .btn-danger:hover {
            opacity: 0.8;
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-footer {
            padding: 1rem;
            border-top: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }
    </style>

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Calendar View -->
    <nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700 text-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
            <li>
                <div class="flex items-center">
                    <a href="{{ route('agenda.index') }}" class="ms-1 text-2xl font-semibold text-white">Tambah Agenda</a>
                </div>
            </li>
        </ol>
    </nav>

    <div id="calendar" style="max-width: 1200px; margin: 20px auto;"></div>

    <!-- Event Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="eventForm">
                        <div class="form-group">
                            <label for="eventTitle">Title</label>
                            <input type="text" class="form-control" id="eventTitle" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="eventStart">Start</label>
                            <input type="datetime-local" class="form-control" id="eventStart" name="start" required>
                        </div>
                        <div class="form-group">
                            <label for="eventEnd">End</label>
                            <input type="datetime-local" class="form-control" id="eventEnd" name="end">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="eventAllDay" name="all_day">
                                <label class="form-check-label" for="eventAllDay">All Day</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="eventLocation">Location</label>
                            <input type="text" class="form-control" id="eventLocation" name="location">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Modal for Messages -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="messageModalBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Details Modal -->
    <div class="modal fade" id="eventDetailsModal" tabindex="-1" role="dialog" aria-labelledby="eventDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventDetailsModalLabel">Event Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Title:</strong> <span id="eventDetailsTitle"></span></p>
                    <p><strong>Start:</strong> <span id="eventDetailsStart"></span></p>
                    <p><strong>End:</strong> <span id="eventDetailsEnd"></span></p>
                    <p><strong>All Day:</strong> <span id="eventDetailsAllDay"></span></p>
                    <p><strong>Location:</strong> <span id="eventDetailsLocation"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="deleteEventButton">Delete Event</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: '{{ route('agenda.events.get') }}', // Fetch events from server
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        navLinks: true, // Click day/week names to navigate views
        businessHours: true, // Display business hours
        editable: true,
        selectable: true,
        selectMirror: true,
        select: function(arg) {
            // Open the modal when a date is selected
            $('#eventTitle').val('');
            $('#eventStart').val(formatDateForInput(arg.start));
            $('#eventEnd').val(arg.end ? formatDateForInput(arg.end) : '');
            $('#eventAllDay').prop('checked', arg.allDay);
            $('#eventLocation').val('');
            $('#eventModal').modal('show');

            // Handle form submission
            $('#eventForm').off('submit').on('submit', function(e) {
                e.preventDefault();
                fetch('{{ route('agenda.events.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        title: $('#eventTitle').val(),
                        start: formatDateForDatabase($('#eventStart').val()),
                        end: $('#eventEnd').val() ? formatDateForDatabase($('#eventEnd').val()) : null,
                        all_day: $('#eventAllDay').is(':checked'),
                        location: $('#eventLocation').val()
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.errors) {
                        showMessageModal('Error', 'Error adding event: ' + JSON.stringify(data.errors));
                    } else {
                        calendar.addEvent({
                            id: data.id,
                            title: data.title,
                            start: data.start,
                            end: data.end,
                            allDay: data.all_day,
                            location: data.location
                        });
                        $('#eventModal').modal('hide');
                        showMessageModal('Success', 'Event added successfully.');
                    }
                })
                .catch(error => {
                    showMessageModal('Error', 'Error adding event: ' + error.message);
                });
            });
        },
        eventClick: function(arg) {
            // Update the details modal with event information
            $('#eventDetailsTitle').text(arg.event.title);
            $('#eventDetailsStart').text(formatDateForDisplay(arg.event.start));
            $('#eventDetailsEnd').text(arg.event.end ? formatDateForDisplay(arg.event.end) : 'N/A');
            $('#eventDetailsAllDay').text(arg.event.allDay ? 'Yes' : 'No');
            $('#eventDetailsLocation').text(arg.event.extendedProps.location || 'N/A');
            
            $('#eventDetailsModal').modal('show');

            // Handle delete button click
            $('#deleteEventButton').off('click').on('click', function() {
                fetch('{{ route('agenda.events.destroy', ':id') }}'.replace(':id', arg.event.id), {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        _method: 'DELETE',
                        id: arg.event.id
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.errors) {
                        showMessageModal('Error', 'Error deleting event: ' + JSON.stringify(data.errors));
                    } else {
                        calendar.getEventById(arg.event.id).remove();
                        $('#eventDetailsModal').modal('hide');
                        showMessageModal('Success', 'Event deleted successfully.');
                    }
                })
                .catch(error => {
                    showMessageModal('Error', 'Error deleting event: ' + error.message);
                });
            });
        },
        eventDrop: function(info) {
            // Handle event drop
            fetch('{{ route('agenda.events.update', ':id') }}'.replace(':id', info.event.id), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    _method: 'PUT',
                    id: info.event.id,
                    title: info.event.title,
                    start: formatDateForDatabase(info.event.start),
                    end: info.event.end ? formatDateForDatabase(info.event.end) : null,
                    all_day: info.event.allDay,
                    location: info.event.extendedProps.location
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                    showMessageModal('Error', 'Error updating event: ' + JSON.stringify(data.errors));
                    info.revert();
                } else {
                    showMessageModal('Success', 'Event updated successfully.');
                }
            })
            .catch(error => {
                showMessageModal('Error', 'Error updating event: ' + error.message);
                info.revert();
            });
        },
        eventResize: function(info) {
            // Handle event resize
            fetch('{{ route('agenda.events.update', ':id') }}'.replace(':id', info.event.id), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    _method: 'PUT',
                    id: info.event.id,
                    title: info.event.title,
                    start: formatDateForDatabase(info.event.start),
                    end: info.event.end ? formatDateForDatabase(info.event.end) : null,
                    all_day: info.event.allDay,
                    location: info.event.extendedProps.location
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                    showMessageModal('Error', 'Error updating event: ' + JSON.stringify(data.errors));
                    info.revert();
                } else {
                    showMessageModal('Success', 'Event updated successfully.');
                }
            })
            .catch(error => {
                showMessageModal('Error', 'Error updating event: ' + error.message);
                info.revert();
            });
        }
    });

    calendar.render();

    function formatDateForInput(date) {
        let d = new Date(date);
        return d.toISOString().slice(0, 16);
    }

    function formatDateForDatabase(date) {
        let d = new Date(date);
        return d.getFullYear() + '-' +
               ('0' + (d.getMonth() + 1)).slice(-2) + '-' +
               ('0' + d.getDate()).slice(-2) + ' ' +
               ('0' + d.getHours()).slice(-2) + ':' +
               ('0' + d.getMinutes()).slice(-2) + ':' +
               ('0' + d.getSeconds()).slice(-2);
    }

    function formatDateForDisplay(date) {
        let d = new Date(date);
        return d.toLocaleString();
    }

    function showMessageModal(title, message) {
        $('#messageModalLabel').text(title);
        $('#messageModalBody').text(message);
        $('#messageModal').modal('show');
    }
});


    </script>

@endsection

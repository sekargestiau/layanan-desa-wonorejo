@extends('agenda.components.main')

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-pzK6H6Im6W8udF1F7Uom7If/j0gI5KjFfJsk0mkn/KU=" crossorigin=""/>

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

@section('content')
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
<<<<<<< Updated upstream
                        <button type="submit" class="btn btn-primary btn-block">Save Event</button>
=======
                        <div class="form-group">
                            <label for="map">Pilih Lokasi</label>
                            <div id="map" style="height: 400px;"></div>
                            <input type="hidden" id="latitude" name="latitude">
                            <input type="hidden" id="longitude" name="longitude">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan Kegiatan</button>
>>>>>>> Stashed changes
                    </form>
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
<<<<<<< Updated upstream
                    <p><strong>Title:</strong> <span id="eventDetailsTitle"></span></p>
                    <p><strong>Start:</strong> <span id="eventDetailsStart"></span></p>
                    <p><strong>End:</strong> <span id="eventDetailsEnd"></span></p>
                    <p><strong>All Day:</strong> <span id="eventDetailsAllDay"></span></p>
                    <p><strong>Location:</strong> <span id="eventDetailsLocation"></span></p>
=======
                    <p><strong>Judul:</strong> <span id="eventDetailsTitle"></span></p>
                    <p><strong>Mulai:</strong> <span id="eventDetailsStart"></span></p>
                    <p><strong>Selesai:</strong> <span id="eventDetailsEnd"></span></p>
                    <p><strong>Seharian:</strong> <span id="eventDetailsAllDay"></span></p>
                    <p><strong>Lokasi:</strong> <span id="eventDetailsLocation"></span></p>
                    <!-- Map Container -->
                    <div id="eventDetailsMap" style="height: 300px;"></div>
>>>>>>> Stashed changes
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="deleteEventButton">Delete Event</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
<<<<<<< Updated upstream
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
                $('#eventStart').val(formatDate(arg.start));
                $('#eventEnd').val(arg.end ? formatDate(arg.end) : '');
                $('#eventAllDay').prop('checked', arg.allDay);
                $('#eventLocation').val('');
                $('#eventModal').modal('show');

=======
        var map;

        // Function to initialize the map
        function initializeMap(lat, lng) {
            if (map) {
                map.remove(); // Remove existing map if it exists
            }

            map = L.map('eventDetailsMap').setView([lat, lng], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([lat, lng]).addTo(map)
                .bindPopup('Event Location')
                .openPopup();
        }

        // Event listener for showing event details
        $('#eventDetailsModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var eventData = button.data(); // Extract data attributes

            // Debugging: Check the eventData
            console.log('Event Data:', eventData);

            // Check if eventData is defined
            if (!eventData) {
                console.error('eventData is undefined');
                return;
            }

            // Set event details with default values
            $('#eventDetailsTitle').text(eventData.title || 'No Title');
            $('#eventDetailsStart').text(eventData.start || 'No Start Time');
            $('#eventDetailsEnd').text(eventData.end ? eventData.end : 'No End Time');
            $('#eventDetailsAllDay').text(eventData.allDay ? 'Yes' : 'No');
            $('#eventDetailsLocation').text(eventData.location || 'No Location');

            // Initialize the map with event location
            if (eventData.latitude && eventData.longitude) {
                initializeMap(eventData.latitude, eventData.longitude);
            } else {
                // Fallback to a default location if no coordinates are provided
                initializeMap(-7.5481, 110.7220); // Default to Wonorejo, Polokarto
            }
        });

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

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                            start: $('#eventStart').val(),
                            end: $('#eventEnd').val(),
                            all_day: $('#eventAllDay').is(':checked'),
                            location: $('#eventLocation').val()
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.errors) {
                            alert('Error adding event: ' + JSON.stringify(data.errors));
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
                        }
                    })
                    .catch(error => {
                        alert('Error adding event: ' + error.message);
                    });
                });
            },
            eventClick: function(arg) {
                // Update the details modal with event information
                $('#eventDetailsTitle').text(arg.event.title);
                $('#eventDetailsStart').text(formatDate(arg.event.start));
                $('#eventDetailsEnd').text(arg.event.end ? formatDate(arg.event.end) : 'N/A');
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
                            alert('Error deleting event: ' + JSON.stringify(data.errors));
                        } else {
                            calendar.getEventById(arg.event.id).remove();
                            $('#eventDetailsModal').modal('hide');
                        }
                    })
                    .catch(error => {
                        alert('Error deleting event: ' + error.message);
                    });
                });
=======
                            start: formatDateForDatabase($('#eventStart').val()),
                            end: $('#eventEnd').val() ? formatDateForDatabase($('#eventEnd').val()) : null,
                            all_day: $('#eventAllDay').is(':checked'),
                            location: $('#eventLocation').val(),
                            latitude: $('#latitude').val(),  // Add this
                            longitude: $('#longitude').val() // Add this
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.errors) {
                            showMessageModal('Error', 'Terjadi kesalahan saat menambah kegiatan: ' + JSON.stringify(data.errors));
                        } else {
                            calendar.addEvent({
                                id: data.id,
                                title: data.title,
                                start: data.start,
                                end: data.end,
                                allDay: data.all_day,
                                location: data.location,
                                latitude: data.latitude,   
                                longitude: data.longitude 
                            });
                            $('#eventModal').modal('hide');
                            showMessageModal('Sukses', 'Kegiatan berhasil ditambahkan.');
                        }
                    })
                    .catch(error => {
                        showMessageModal('Error', 'Terjadi kesalahan saat menambah kegiatan: ' + error.message);
                    });
                });
            },
            eventClick: function(arg) {
                // Debugging: Check the event object
                console.log('Clicked Event:', arg.event);

                // Update the details modal with event information
                $('#eventDetailsTitle').text(arg.event.title || 'No Title');
                $('#eventDetailsStart').text(formatDateForDisplay(arg.event.start));
                $('#eventDetailsEnd').text(arg.event.end ? formatDateForDisplay(arg.event.end) : 'N/A');
                $('#eventDetailsAllDay').text(arg.event.allDay ? 'Ya' : 'Tidak');
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
                            showMessageModal('Error', 'Terjadi kesalahan saat menghapus kegiatan: ' + JSON.stringify(data.errors));
                        } else {
                            calendar.getEventById(arg.event.id).remove();
                            $('#eventDetailsModal').modal('hide');
                            showMessageModal('Sukses', 'Kegiatan berhasil dihapus.');
                        }
                    })
                    .catch(error => {
                        showMessageModal('Error', 'Terjadi kesalahan saat menghapus kegiatan: ' + error.message);
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
                        showMessageModal('Error', 'Terjadi kesalahan saat memperbarui kegiatan: ' + JSON.stringify(data.errors));
                        info.revert();
                    } else {
                        showMessageModal('Sukses', 'Kegiatan berhasil diperbarui.');
                    }
                })
                .catch(error => {
                    showMessageModal('Error', 'Terjadi kesalahan saat memperbarui kegiatan: ' + error.message);
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
                        showMessageModal('Error', 'Terjadi kesalahan saat memperbarui kegiatan: ' + JSON.stringify(data.errors));
                        info.revert();
                    } else {
                        showMessageModal('Sukses', 'Kegiatan berhasil diperbarui.');
                    }
                })
                .catch(error => {
                    showMessageModal('Error', 'Terjadi kesalahan saat memperbarui kegiatan: ' + error.message);
                    info.revert();
                });
>>>>>>> Stashed changes
            }
        });

        calendar.render();

<<<<<<< Updated upstream
        function formatDate(date) {
            return date.toISOString().slice(0, 16);
        }
    });
    </script>
=======
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


>>>>>>> Stashed changes
@endsection

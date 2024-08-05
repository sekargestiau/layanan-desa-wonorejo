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
                    <a href="{{ route('agenda.tambah') }}" class="ms-1 text-2xl font-semibold text-white">Tambah Agenda</a>
                </div>
            </li>
        </ol>
    </nav>

    <div id="calendar" style="max-width: 1200px; margin: 20px auto;"></div>

    <!-- Event Modal -->
    <div id="eventModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="eventForm">
                        <div class="form-group">
                            <label for="eventTitle">Judul</label>
                            <input type="text" class="form-control" id="eventTitle" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="eventStart">Mulai</label>
                            <input type="datetime-local" class="form-control" id="eventStart" name="start" required>
                        </div>
                        <div class="form-group">
                            <label for="eventEnd">Selesai</label>
                            <input type="datetime-local" class="form-control" id="eventEnd" name="end">
                        </div>
                        <div class="form-group">
                            <label for="eventLocation">Lokasi</label>
                            <input type="text" class="form-control" id="eventLocation" name="location" required>
                        </div>
                        <div id="eventMap" style="height: 300px;"></div>
                        <input type="hidden" id="latitude" name="latitude">
                        <input type="hidden" id="longitude" name="longitude">
                        <button type="submit" class="btn btn-primary mt-3">Simpan Kegiatan</button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="messageModalBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Details Modal -->
<div class="modal fade" id="eventDetailsModal" tabindex="-1" role="dialog" aria-labelledby="eventDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventDetailsModalLabel">Detail Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Judul:</strong> <span id="eventDetailsTitle"></span></p>
                <p><strong>Mulai:</strong> <span id="eventDetailsStart"></span></p>
                <p><strong>Selesai:</strong> <span id="eventDetailsEnd"></span></p>
                <p><strong>Lokasi:</strong> <span id="eventDetailsLocation"></span></p>
                <input type="hidden" id="eventDetailsLatitude" />
                <input type="hidden" id="eventDetailsLongitude" />
                <div id="eventDetailsMap" style="height: 300px;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="deleteEventButton">Hapus Kegiatan</button>
            </div>
        </div>
    </div>
</div>



  
    
    <!-- JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var map, marker, detailsMap, detailsMarker;

    function initializeMap(lat, lng, mapId, draggable = false) {
        var mapInstance = L.map(mapId).setView([lat, lng], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapInstance);

        var markerVar = L.marker([lat, lng], {
            draggable: draggable
        }).addTo(mapInstance);

        if (draggable) {
            markerVar.on('dragend', function(event) {
                var position = markerVar.getLatLng();
                document.getElementById('latitude').value = position.lat;
                document.getElementById('longitude').value = position.lng;
                mapInstance.setView(position); // Keep map centered on the marker
            });
        }

        return { mapInstance, markerVar };
    }

    $('#eventModal').on('shown.bs.modal', function() {
        var defaultLat = -7.5481;
        var defaultLng = 110.7220;

        if (!map) {
            var mapData = initializeMap(defaultLat, defaultLng, 'eventMap', true);
            map = mapData.mapInstance;
            marker = mapData.markerVar;
        } else {
            map.setView([defaultLat, defaultLng], 13);
            marker.setLatLng([defaultLat, defaultLng]);
        }

        document.getElementById('latitude').value = defaultLat;
        document.getElementById('longitude').value = defaultLng;
    });

    $('#eventDetailsModal').on('shown.bs.modal', function() {
        var lat = parseFloat($('#eventDetailsLatitude').val());
        var lng = parseFloat($('#eventDetailsLongitude').val());

        // Ensure valid lat and lng values
        if (isNaN(lat) || isNaN(lng)) {
            lat = -7.5481; // Default latitude
            lng = 110.7220; // Default longitude
        }

        if (!detailsMap) {
            var mapData = initializeMap(lat, lng, 'eventDetailsMap');
            detailsMap = mapData.mapInstance;
            detailsMarker = mapData.markerVar;
        } else {
            detailsMap.setView([lat, lng], 13);
            detailsMarker.setLatLng([lat, lng]);
        }
    });

    $('#eventForm').on('submit', function(event) {
        event.preventDefault();

        // Capture form data
        var formData = {
            title: $('#eventTitle').val(),
            start: $('#eventStart').val(),
            end: $('#eventEnd').val(),
            location: $('#eventLocation').val(),
            latitude: $('#latitude').val(),
            longitude: $('#longitude').val(),
            all_day: 0
        };

        // AJAX request to store event
        $.ajax({
            url: '{{ route('agenda.events.store') }}',
            method: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(response) {
                // Close modal and refresh calendar
                $('#eventModal').modal('hide');
                calendar.refetchEvents();
                showMessageModal('Sukses', 'Kegiatan berhasil disimpan.');
            },
            error: function(xhr) {
                showMessageModal('Error', 'Terjadi kesalahan saat menyimpan kegiatan: ' + JSON.stringify(xhr.responseJSON.errors));
            }
        });
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
            $('#eventTitle').val('');
            $('#eventStart').val(formatDateForInput(arg.start));
            $('#eventEnd').val(arg.end ? formatDateForInput(arg.end) : '');
            $('#eventLocation').val('');
            $('#eventModal').modal('show');
        },
        eventClick: function(arg) {
            // Update the details modal with event information
            $('#eventDetailsTitle').text(arg.event.title);
            $('#eventDetailsStart').text(formatDateForDisplay(arg.event.start));
            $('#eventDetailsEnd').text(arg.event.end ? formatDateForDisplay(arg.event.end) : 'N/A');
            $('#eventDetailsLocation').text(arg.event.extendedProps.location || 'N/A');
            $('#eventDetailsLatitude').val(arg.event.extendedProps.latitude || 'N/A');
            $('#eventDetailsLongitude').val(arg.event.extendedProps.longitude || 'N/A');
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
                    location: info.event.extendedProps.location,
                    latitude: info.event.extendedProps.latitude,
                    longitude: info.event.extendedProps.longitude
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
                    location: info.event.extendedProps.location,
                    latitude: info.event.extendedProps.latitude,
                    longitude: info.event.extendedProps.longitude
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

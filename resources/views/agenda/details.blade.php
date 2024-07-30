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

    <div class="container mt-5">
        <nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700 text-lg" aria-label="Breadcrumb">
            <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
                <li class="flex justify-center w-full">
                    <a href="{{ route('agenda.index') }}" class="ms-1 text-2xl font-semibold text-white flex justify-center items-center">Tambah Kegiatan</a>
                </li>
            </ol>
        </nav>

        <form id="eventForm" method="POST" action="{{ route('agenda.storeDetails') }}">
            @csrf
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead class="bg-info text-white">
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Waktu Kegiatan</th>
                            <th>Tanggal Berakhir</th>
                            <th>Waktu Berakhir</th>
                            <th>Lokasi Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" id="eventName" name="eventName" placeholder="Masukkan nama kegiatan" required></td>
                            <td><input type="date" class="form-control" id="eventDate" name="eventDate" required></td>
                            <td><input type="time" class="form-control" id="eventTime" name="eventTime" required></td>
                            <td><input type="date" class="form-control" id="eventEndDate" name="eventEndDate" required></td>
                            <td><input type="time" class="form-control" id="eventEndTime" name="eventEndTime" required></td>
                            <td><input type="text" class="form-control" id="eventLocation" name="eventLocation" placeholder="Masukkan lokasi kegiatan" required></td>
                            <td><button type="button" id="submitEventBtn" class="btn btn-primary">Simpan Kegiatan</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>

        <div id="calendar" style="max-width: 1200px; margin: 20px auto;"></div>

        <!-- Modal for Viewing Event Details -->
        <div class="modal fade" id="eventDetailsModal" tabindex="-1" aria-labelledby="eventDetailsLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eventDetailsLabel">Detail Kegiatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Mulai:</strong> <span id="modalStart"></span></p>
                        <p><strong>Berakhir:</strong> <span id="modalEnd"></span></p>
                        <p><strong>Lokasi:</strong> <span id="modalLocation"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="deleteEventButton" class="btn btn-danger">Hapus Kegiatan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Creating Event -->
        <div class="modal fade" id="createEventModal" tabindex="-1" aria-labelledby="createEventLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createEventLabel">Tambah Kegiatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="createEventForm">
                            @csrf
                            <div class="form-group">
                                <label for="createEventName">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="createEventName" name="eventName" placeholder="Masukkan nama kegiatan" required>
                            </div>
                            <div class="form-group">
                                <label for="createEventDate">Tanggal Kegiatan</label>
                                <input type="date" class="form-control" id="createEventDate" name="eventDate" required>
                            </div>
                            <div class="form-group">
                                <label for="createEventTime">Waktu Kegiatan</label>
                                <input type="time" class="form-control" id="createEventTime" name="eventTime" required>
                            </div>
                            <div class="form-group">
                                <label for="createEventEndDate">Tanggal Berakhir</label>
                                <input type="date" class="form-control" id="createEventEndDate" name="eventEndDate" required>
                            </div>
                            <div class="form-group">
                                <label for="createEventEndTime">Waktu Berakhir</label>
                                <input type="time" class="form-control" id="createEventEndTime" name="eventEndTime" required>
                            </div>
                            <div class="form-group">
                                <label for="createEventLocation">Lokasi Kegiatan</label>
                                <input type="text" class="form-control" id="createEventLocation" name="eventLocation" placeholder="Masukkan lokasi kegiatan" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var selectedEventId = null;
                var createEventForm = document.getElementById('createEventForm');
                var eventForm = document.getElementById('eventForm');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: function(fetchInfo, successCallback, failureCallback) {
                        fetch('{{ route('agenda.fetchEvents') }}')
                            .then(response => response.json())
                            .then(data => successCallback(data))
                            .catch(error => failureCallback(error));
                    },
                    editable: true,
                    selectable: true,
                    eventClick: function(info) {
                        selectedEventId = info.event.id;
                        document.getElementById('modalStart').innerText = info.event.start.toLocaleString();
                        document.getElementById('modalEnd').innerText = info.event.end ? info.event.end.toLocaleString() : 'N/A';
                        document.getElementById('modalLocation').innerText = info.event.extendedProps.location;
                        $('#eventDetailsModal').modal('show');
                    },
                    select: function(info) {
                        // Set default values for the create event modal
                        document.getElementById('createEventName').value = '';
                        document.getElementById('createEventDate').value = info.startStr.split('T')[0];
                        document.getElementById('createEventTime').value = info.startStr.split('T')[1];
                        document.getElementById('createEventEndDate').value = '';
                        document.getElementById('createEventEndTime').value = '';
                        document.getElementById('createEventLocation').value = '';
                        
                        $('#createEventModal').modal('show');

                        createEventForm.addEventListener('submit', function(e) {
                            e.preventDefault();
                            var formData = new FormData(createEventForm);
                            fetch('{{ route('agenda.storeDetails') }}', {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                }
                            }).then(response => response.json())
                              .then(data => {
                                  calendar.addEvent({
                                      id: data.id,
                                      title: data.eventName,
                                      start: data.start,
                                      end: data.end,
                                      extendedProps: {
                                          location: data.eventLocation
                                      }
                                  });
                                  $('#createEventModal').modal('hide');
                              });
                        });
                    }
                });

                calendar.render();

                document.getElementById('deleteEventButton').addEventListener('click', function() {
                    if (selectedEventId) {
                        fetch('{{ route('agenda.deleteEvent') }}', {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({ id: selectedEventId })
                        }).then(response => response.json())
                          .then(data => {
                              if (data.success) {
                                  var event = calendar.getEventById(selectedEventId);
                                  if (event) {
                                      event.remove();
                                  }
                                  $('#eventDetailsModal').modal('hide');
                              } else {
                                  alert('Gagal menghapus kegiatan.');
                              }
                          });
                    }
                });

                document.getElementById('submitEventBtn').addEventListener('click', function() {
                    var formData = new FormData(eventForm);
                    fetch('{{ route('agenda.storeDetails') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    }).then(response => response.json())
                      .then(data => {
                          calendar.addEvent({
                              id: data.id,
                              title: data.eventName,
                              start: data.start,
                              end: data.end,
                              extendedProps: {
                                  location: data.eventLocation
                              }
                          });
                      });
                });
            });
        </script>
    </div>
@endsection

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
              <a href="{{ route('agenda.index') }}" class="ms-1 text-2xl font-semibold text-white">Agenda Kegiatan Desa</a>
            </div>
          </li>
        </ol>
    </nav>

    <div id="calendar" style="max-width: 1200px; margin: 20px auto;"></div>

    <!-- Modal untuk menampilkan detail kegiatan -->
    <div class="modal fade" id="eventDetailsModal" tabindex="-1" aria-labelledby="eventDetailsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Detail Kegiatan</h5>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
                events: function(fetchInfo, successCallback, failureCallback) {
                    fetch('{{ route('agenda.fetchEvents') }}')
                        .then(response => response.json())
                        .then(data => successCallback(data))
                        .catch(error => failureCallback(error));
                },
                editable: true,
                selectable: true,
                eventClick: function(info) {
                    document.getElementById('modalTitle').innerText = info.event.title;
                    document.getElementById('modalStart').innerText = info.event.start.toLocaleString();
                    document.getElementById('modalEnd').innerText = info.event.end ? info.event.end.toLocaleString() : 'N/A';
                    document.getElementById('modalLocation').innerText = info.event.extendedProps.location;

                    // Show the modal
                    $('#eventDetailsModal').modal('show');
                },
                select: function(info) {
                    var title = prompt('Masukkan judul kegiatan:');
                    var location = prompt('Masukkan lokasi kegiatan:');
                    if (title) {
                        fetch('{{ route('agenda.storeDetails') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                eventName: title,
                                eventDate: info.startStr.split('T')[0],
                                eventTime: info.startStr.split('T')[1],
                                eventLocation: location
                            })
                        }).then(response => response.json())
                          .then(data => {
                              calendar.addEvent({
                                  id: data.id,
                                  title: data.eventName,
                                  start: data.start,
                                  end: data.end, // Update this line
                                  extendedProps: {
                                      location: data.eventLocation
                                  }
                              });
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

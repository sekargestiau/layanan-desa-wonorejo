@extends('agenda.components.main')

@section('content')
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700 text-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
            <li>
                <div class="flex items-center">
                    <a href="{{ route('agenda.detail_agenda.index') }}" class="ms-1 text-2xl font-semibold text-white">{{ $title }}</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4 text-center">Kegiatan</h2>
        
        <table class="table table-striped table-bordered text-center w-100">
            <thead class="thead-light">
                <tr>
                    <th style="width: 15%;">Judul</th>
                    <th style="width: 15%;">Mulai</th>
                    <th style="width: 15%;">Selesai</th>
                    <th style="width: 15%;">Lokasi</th>
                    <th style="width: 10%;">Latitude</th>
                    <th style="width: 10%;">Longitude</th>
                    <th style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td class="align-middle">{{ $event->title }}</td>
                        <td class="align-middle">{{ $event->start }}</td>
                        <td class="align-middle">{{ $event->end }}</td>
                        <td class="align-middle">{{ $event->location }}</td>
                        <td class="align-middle">{{ $event->latitude }}</td>
                        <td class="align-middle">{{ $event->longitude }}</td>
                        <td class="align-middle">
                            <button class="btn btn-primary btn-sm edit-btn" 
                                    data-id="{{ $event->id }}" 
                                    data-title="{{ $event->title }}" 
                                    data-start="{{ $event->start }}" 
                                    data-end="{{ $event->end }}" 
                                    data-location="{{ $event->location }}"
                                    data-latitude="{{ $event->latitude }}"
                                    data-longitude="{{ $event->longitude }}"
                                    data-all-day="{{ $event->all_day }}">Edit</button>
                            <button class="btn btn-danger btn-sm delete-btn" 
                                    data-id="{{ $event->id }}">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        
    </div>
    
    <style>
        .table thead th {
            background-color: #f8f9fa; 
            color: #343a40; 
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f2f2f2; 
        }
        .table tbody tr:nth-child(even) {
            background-color: #ffffff; 
        }
        .table tbody tr:hover {
            background-color: #e9ecef; 
        }
    </style>

    <!-- Edit Modal -->
    <div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="editEventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editEventModalLabel">Edit Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editEventForm">
                        <input type="hidden" id="editEventId">
                        
                        <div class="form-group">
                            <label for="editEventTitle">Judul</label>
                            <input type="text" class="form-control" id="editEventTitle" name="title" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="editEventStart">Mulai</label>
                            <input type="datetime-local" class="form-control" id="editEventStart" name="start" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="editEventEnd">Selesai</label>
                            <input type="datetime-local" class="form-control" id="editEventEnd" name="end">
                        </div>
                        
                        <div class="form-group">
                            <label for="editEventLocation">Lokasi</label>
                            <input type="text" class="form-control" id="editEventLocation" name="location">
                        </div>
                        
                        <div class="form-group">
                            <label for="editEventLatitude">Latitude</label>
                            <input type="text" class="form-control" id="editEventLatitude" name="latitude" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="editEventLongitude">Longitude</label>
                            <input type="text" class="form-control" id="editEventLongitude" name="longitude" readonly>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteEventModal" tabindex="-1" role="dialog" aria-labelledby="deleteEventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteEventModalLabel">Hapus Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus kegiatan ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
let deleteId;

document.addEventListener('DOMContentLoaded', function() {
    // Handle Edit Button Click
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            $('#editEventId').val(this.getAttribute('data-id'));
            $('#editEventTitle').val(this.getAttribute('data-title'));
            $('#editEventStart').val(this.getAttribute('data-start'));
            $('#editEventEnd').val(this.getAttribute('data-end'));
            $('#editEventLocation').val(this.getAttribute('data-location'));
            $('#editEventLatitude').val(this.getAttribute('data-latitude'));
            $('#editEventLongitude').val(this.getAttribute('data-longitude'));
            // Set all_day to true and hide checkbox (no need to get it from data)
            $('#editEventAllDay').prop('checked', true).hide();
            $('#editEventModal').modal('show');
        });
    });

    // Handle Edit Event Form Submission
    $('#editEventForm').on('submit', function(e) {
        e.preventDefault();
        const eventId = $('#editEventId').val();
        fetch(`{{ route('agenda.events.update', '') }}/${eventId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                title: $('#editEventTitle').val(),
                start: $('#editEventStart').val(),
                end: $('#editEventEnd').val(),
                all_day: true, // Always set to true
                location: $('#editEventLocation').val(),
                latitude: $('#editEventLatitude').val(),
                longitude: $('#editEventLongitude').val()
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.errors) {
                alert('Terjadi kesalahan saat memperbarui kegiatan: ' + JSON.stringify(data.errors));
            } else {
                location.reload(); // Reload the page to reflect changes
            }
        })
        .catch(error => {
            alert('Terjadi kesalahan saat memperbarui kegiatan: ' + error.message);
        });
    });

    // Handle Delete Button Click
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            deleteId = this.getAttribute('data-id');
            $('#deleteEventModal').modal('show');
        });
    });

    // Handle Confirm Delete
    $('#confirmDelete').on('click', function() {
        fetch(`{{ route('agenda.events.destroy', '') }}/${deleteId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                id: deleteId // Include the id field
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.errors) {
                alert('Terjadi kesalahan saat menghapus kegiatan: ' + JSON.stringify(data.errors));
            } else {
                location.reload(); // Reload the page to reflect changes
            }
        })
        .catch(error => {
            alert('Terjadi kesalahan saat menghapus kegiatan: ' + error.message);
        });
    });
});
</script>

@endsection

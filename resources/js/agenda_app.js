import 'flowbite';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var selectedEventId = null;
    var createEventForm = document.getElementById('createEventForm');
    var eventForm = document.getElementById('eventForm');
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (!csrfToken) {
        console.error('CSRF token not found.');
        return;
    }

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: function(fetchInfo, successCallback, failureCallback) {
            fetch(`{{ route('agenda.fetchEvents') }}`)
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
            document.getElementById('createEventName').value = '';
            document.getElementById('createEventDate').value = info.startStr.split('T')[0];
            document.getElementById('createEventTime').value = info.startStr.split('T')[1] || '';
            document.getElementById('createEventEndDate').value = '';
            document.getElementById('createEventEndTime').value = '';
            document.getElementById('createEventLocation').value = '';

            $('#createEventModal').modal('show');
        }
    });

    calendar.render();

    createEventForm.addEventListener('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(createEventForm);
        fetch(`{{ route('agenda.storeDetails') }}`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(response => response.json())
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

    document.getElementById('deleteEventButton').addEventListener('click', function() {
        if (selectedEventId) {
            fetch(`{{ route('agenda.deleteEvent') }}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ id: selectedEventId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    var event = calendar.getEventById(selectedEventId);
                    if (event) {
                        event.remove();
                    }
                    $('#eventDetailsModal').modal('hide');
                } else {
                    alert(data.message || 'Failed to delete event.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while deleting the event.');
            });
        }
    });

    document.getElementById('submitEventBtn').addEventListener('click', function() {
        var formData = new FormData(eventForm);
        fetch(`{{ route('agenda.storeDetails') }}`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(response => response.json())
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

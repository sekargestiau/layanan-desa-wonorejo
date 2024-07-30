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
            fetch('http://127.0.0.1:8000/agenda/fetch-events')
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
        }
    });

    calendar.render();

    // Add event listener once for the createEventForm
    createEventForm.addEventListener('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(createEventForm);
        fetch('http://127.0.0.1:8000/agenda/store', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
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

    document.getElementById('deleteEventButton').addEventListener('click', function() {
        if (selectedEventId) {
            fetch('http://127.0.0.1:8000/agenda/delete', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
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
        fetch('http://127.0.0.1:8000/agenda/store', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
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

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/agenda_app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
</head>
<body>
    <div class="header">
        <div class="header-bg" style="background-image: url('http://wonorejo.id/assets/front/css/images/latar_website.jpg?v2fea19cb8b4f08ffe6b24e38cc2e0829');">
            <div class="wrapbg">
                <div class="bg"></div>
                <div class="bg bg2"></div>
                <div class="bg bg3"></div>
            </div>
        </div>
        <div class="marginpage">
            <div class="headermain">
                <div class="headermain-left">
                    <a href="http://wonorejo.id/">
                        <div class="maingrid">
                            <div class="headermain-logo">
                                <img src="http://wonorejo.id/desa/logo/1698142051_457px-Kabupaten_Sukoharjo.png" alt="Logo">
                            </div>
                            <div class="headermain-title">
                                <h2>Wonorejo Religius Dan Berbudaya</h2>
                                <h1>Desa Wonorejo</h1>
                                <p>Kecamatan Polokarto<br>Kabupaten Sukoharjo - Jawa Tengah</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="h-screen w-full">
        <div class="container mx-auto mt-4">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">Jadwal Kegiatan Desa</h2>
                <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="showAddEventModal()">Tambah Kegiatan</button>
            </div>
            <div id="calendar"></div>
        </div>

        <!-- Modal -->
        <div id="addEventModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Tambah Kegiatan
                        </h3>
                        <div class="mt-2">
                            <input type="text" name="title" id="title" placeholder="Nama Kegiatan" class="w-full border-gray-300 rounded-md">
                            <input type="datetime-local" name="start" id="start" placeholder="Tanggal Mulai" class="w-full border-gray-300 rounded-md mt-2">
                            <input type="datetime-local" name="end" id="end" placeholder="Tanggal Selesai" class="w-full border-gray-300 rounded-md mt-2">
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6">
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm" onclick="addEvent()">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#calendar').fullCalendar({
                events: '/events',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                droppable: true,
                eventDrop: function (event, delta, revertFunc) {
                    $.ajax({
                        url: '/events/update',
                        method: 'POST',
                        data: {
                            id: event.id,
                            start: event.start.format(),
                            end: event.end ? event.end.format() : null
                        },
                        success: function (response) {
                            alert('Event updated');
                        },
                        error: function () {
                            revertFunc();
                        }
                    });
                }
            });
        });

        function showAddEventModal() {
            $('#addEventModal').removeClass('hidden');
        }

        function addEvent() {
            var title = $('#title').val();
            var start = $('#start').val();
            var end = $('#end').val();

            $.ajax({
                url: '/events/create',
                method: 'POST',
                data: {
                    title: title,
                    start: start,
                    end: end
                },
                success: function (response) {
                    $('#calendar').fullCalendar('renderEvent', response);
                    $('#addEventModal').addClass('hidden');
                }
            });
        }
    </script>
</body>
</html>

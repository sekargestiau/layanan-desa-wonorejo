<!DOCTYPE html>
<html lang="en">

<head>
    @include('agenda.components.head')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <style>
        .sidebar-expanded {
            margin-left: 16rem; /* 64px */
        }

        .sidebar-collapsed {
            margin-left: 0rem; /* Adjust this value as needed */
        }

        .-translate-x-full {
            transform: translateX(-100%);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var sidebarToggleBtn = document.getElementById('sidebar-toggle');
            var sidebar = document.getElementById('default-sidebar');
            var content = document.querySelector('.content-container');

            sidebarToggleBtn.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
                content.classList.toggle('sidebar-expanded');
                content.classList.toggle('sidebar-collapsed');
            });
        });
    </script>
</head>

<body>

    @include('agenda.components.sidebar')
    <div class="p-4 content-container sidebar-collapsed"> <!-- Default state with collapsed sidebar -->
        @include('agenda.components.notification')
        @yield('content')
    </div>
</body>

</html>

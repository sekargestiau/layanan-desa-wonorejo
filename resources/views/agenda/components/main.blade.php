<!DOCTYPE html>
<html lang="en">

<head>
    @include('agenda.components.head')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('sidebar-toggle').addEventListener('click', function() {
                var sidebar = document.getElementById('default-sidebar');
                sidebar.classList.toggle('-translate-x-full');
            });
        });
        </script>
        
</head>

<body>

    @include('agenda.components.sidebar')
    <div class="p-4 sm:ml-64">
        @include('agenda.components.notification')
        @yield('content')
    </div>
</body>

</html>

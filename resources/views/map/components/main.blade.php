<!DOCTYPE html>
<html lang="en">

<head>
    @include('map.components.head')
</head>

<body>

    @include('map.components.sidebar')
    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>
</body>

</html>

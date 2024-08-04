<!DOCTYPE html>
<html lang="en">

<head>
    @include('agenda.components.head')
</head>

<body>

    @include('agenda.components.sidebar')
    <div class="p-4 sm:ml-64">
        @include('agenda.components.notification')
        @yield('content')
        //Sigma
    </div>
</body>

</html>

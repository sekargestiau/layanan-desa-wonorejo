<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">


<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="{{ asset('Logo.png') }}" type="image/png">

<title>{{ $title }}</title>
@vite(['resources/css/agenda_app.css','resources/js/app.js'])
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script type="module" src="http://[::1]:5173/resources/js/agenda_app.js"></script>

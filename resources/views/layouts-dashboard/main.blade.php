<!DOCTYPE html>
<html lang="en" class="v2fLMH8w3xgUEQcl63H9">
    <head>
      @include('layouts-dashboard.head')
      <title>@yield('title')</title>
    </head>
    <body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">
      @include('layouts-dashboard.navbar')
      @include('layouts-dashboard.sidebar')
      
      <main>
          @yield('content')
      </main>
      @include('layouts-dashboard.footer')
    </body>
</html>
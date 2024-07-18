<!DOCTYPE html>
<html lang="en" class="v2fLMH8w3xgUEQcl63H9">
    <head>
      @include('posyandu.layouts.head')
      <title>@yield('title')</title>
    </head>
    <header>
      @include('posyandu.layouts.header')
    </header>
    <body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">
      @include('posyandu.layouts.navbar')
      @include('posyandu.layouts.sidebar')
      <main>
          @yield('content')
      </main>
      @include('posyandu.layouts.footer')
    </body>
</html>
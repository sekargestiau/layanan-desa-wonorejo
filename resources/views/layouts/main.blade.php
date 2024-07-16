<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
    <head>
        @include('layouts.head')
        <title>@yield('title')</title>
    </head>
  <body id="page-top">
    <main>
        @include('layouts.header')
        @yield('container')
    </main>
   <footer id="footer" class="bg-gray-800 py-16">
        @include('layouts.footer')
    </footer>
  </body>
</html>
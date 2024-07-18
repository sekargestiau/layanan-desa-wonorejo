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
      <div class="_LPVUrp9Uina5fcERqWC _DGThsbfFGclb6iwA4_9 QhmQ_v3mmDFIP9VaVOfb _JKsnSqP4tIzydAzf5aP yQK4azPzSPqQ3rmcKxWm" id="sidebarBackdrop"></div>
      <div id="main-content" class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_ uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom Syhv8OuxgyaGMa27BMXo">
      <main>
          @yield('content')
      </main>
      @include('posyandu.layouts.footer')
    </body>
</html>
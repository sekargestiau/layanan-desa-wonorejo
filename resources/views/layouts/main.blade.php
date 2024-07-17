<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
    <head>
      @include('layouts.head')
      <title>@yield('title')</title>
    </head>
    <header>
      @include('layouts.header')
    </header>
    <body>
      <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
      <aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
        @include('layouts.sidebar')
      </aside>

      <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
      
      <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
      <main>
          @yield('content')
      </main>
      <footer class="p-4 my-6 mx-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 xl:p-8 dark:bg-gray-800">
          @include('layouts.footer')
      </footer>
      <p class="my-10 text-sm text-center text-gray-500">
          © 2019-2023 <a href="https://flowbite.com/" class="hover:underline" target="_blank">Flowbite.com</a>. All rights reserved.
      </p>
    </body>
</html>
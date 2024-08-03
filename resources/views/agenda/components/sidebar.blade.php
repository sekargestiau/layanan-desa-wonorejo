<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 dark:text-gray-400 dark:hover:bg-green-700 dark:focus:ring-green-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gradient-to-b from-sky-600 to-green-500">
      <ul class="space-y-2 font-medium">
         <li>
            <div class="flex items-center space-x-2">
               <div class="h-12 w-12">
                  <img src="{{ asset('Logo.png') }}" alt="logo" class="w-full h-full" />
               </div>
               <div class="flex flex-col w-full -space-y-1">
                  <a href="{{ route('agenda.index') }}">
                     <p class="text-lg text-white font-semibold">Agenda Desa Wonorejo</p>
                  </a>
               </div>
            </div>
         </li>
         @guest
         <li>
            <a href="{{ route('login') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Login</span>
            </a>
         </li>
         @else
         <li>
            <a href="{{ route('agenda.tambah') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group {{ request()->routeIs('agenda.tambah') ? 'bg-green-400' : '' }}">
               <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m11.5 11.5 2.071 1.994M4 10h5m11 0h-1.5M12 7V4M7 7V4m10 3V4m-7 13H8v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L10 17Zm-5 3h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Tambah Agenda</span>
            </a>
         </li>
         <li>
            <a href="{{ route('agenda.detail_agenda.index') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group {{ request()->routeIs('agenda.detail_agenda.index') ? 'bg-green-400' : '' }}">
               <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Detail Agenda</span>
            </a>           
         </li>
         <li>
            <a href="{{ route('logout') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
            </a>
         </li>
         @endguest
      </ul>
   </div>
</aside>

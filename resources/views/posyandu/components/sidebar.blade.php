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
            {{-- Logo --}}
            <div class="flex items-center space-x-2">
               <div class="h-12 w-12">
                  <img src='{{ asset('Logo.png') }}' alt="logo" class="w-full h-full" />
               </div>
               <div class="flex flex-col w-full -space-y-1">
                  <p class="text-lg text-white font-semibold">Posyandu Desa Wonorejo</p>

               </div>
         </li>

         <li>
            <a href="/posyandu/balita" class="flex items-center p-2 rounded-lg text-white hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group">
               <!-- Ikon anak-anak SVG dari Flaticon -->
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-black dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 21">
                  <path d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Data Posyandu Balita</span>
            </a>
         </li>

         <li>
            <a href="/posyandu/remaja" class="flex items-center p-2 rounded-lg text-white hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-black dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 22">
                  <path d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Data Posyandu Remaja</span>
            </a>
         </li>

         <li>
            <a href="/posyandu/lansia" class="flex items-center p-2 rounded-lg text-white hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-black dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 22">
                  <path d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Data Posyandu Lansia</span>
            </a>
         </li>

         <li>
            <a href="/posyandu/posbindu" class="flex items-center p-2 rounded-lg text-white hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-black dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 22">
                  <path d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Data Posbindu</span>
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
      </ul>
   </div>
</aside>

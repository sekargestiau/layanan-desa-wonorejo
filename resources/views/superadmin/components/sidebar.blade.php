<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 dark:text-gray-400 dark:hover:bg-green-700 dark:focus:ring-green-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gradient-to-b from-sky-600 to-green-500">
        <ul class="space-y-2 font-medium">
            <li>
                {{-- Logo --}}
                <div class="flex items-center space-x-2">
                    <div class="h-12 w-12">
                        <img src='{{ asset('Logo.png') }}' alt="logo" class="w-full h-full" />
                    </div>
                    <div class="flex flex-col w-full -space-y-1">
                        <p class="text-lg text-white font-semibold">Super Admin</p>
                    </div>
            </li>
            <li>
                <a href="/pengaduan/admin"
                    class="flex items-center p-2 rounded-lg text-white hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group">
                    <!-- Complaints Icon SVG -->
                    <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-black dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 5.58 2 10c0 2.48 1.28 4.66 3.21 6.07-.08.35-.21.83-.21 1.14 0 .34.19.54.35.54.18 0 .37-.15.48-.35.04-.08.08-.17.11-.25.02-.07.04-.13.06-.2C9.29 18.69 10.58 20 12 20c5.52 0 10-3.58 10-8S17.52 2 12 2zm-1 11h-2v-2h2v2zm4 0h-2v-2h2v2z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Data Pengaduan</span>
                </a>

            </li>

            <li>
                <a href="{{ route('logout') }}"
                    class="flex items-center p-2 text-white rounded-lg hover:text-black hover:bg-green-300 dark:hover:bg-green-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('superadmin.components.head')
    <script>
        function updateStatus(form) {
            form.submit();
        }
    </script>
</head>

<body>
    @include('superadmin.components.sidebar')
    <div class="p-4 sm:ml-64">

        <!-- Breadcrumb -->
        @include('superadmin.components.notification')
        <nav class="justify-between px-4 py-3 text-white border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-b from-sky-600 to-green-500 dark:border-gray-700"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
                <li>
                    <div class="flex items-center">
                        <a href="#" class="ms-1 text-xl font-medium hover:text-blue-200 dark:hover:text-white">DATA
                            ADMIN</a>
                    </div>
                </li>
            </ol>
        </nav>
        <br>

        <div class="flex justify-between items-center mb-6">
            <div class="flex gap-2">
                {{-- <button class="bg-blue-200 hover:bg-blue-300 font-bold text-blue-600 px-3 py-2 rounded-md">Tambah
                    Data</button> --}}
                <a href="{{ route('superadmin.create') }}"
                    class="bg-blue-200 hover:bg-blue-300 font-bold text-blue-600 px-3 py-2 rounded-md "> + <span
                        class="hidden sm:inline-block ms-2">Tambah Data</span>
                </a>
            </div>
            <!-- Formulir pencarian -->
            {{-- <form class="flex items-center max-w-lg w-full" action="{{ route('superadmin') }}" method="GET">
                <div class="flex items-center w-full">
                    <select name="category" id="dropdown-button"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                        <option value="all">Semua Admin</option>
                        <option value="peta">Peta</option>
                        <option value="posyandu">Posyandu</option>
                        <option value="pengaduan">Pengaduan</option>
                        <option value="agenda">Agenda</option>
                    </select>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown" name="search"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            placeholder="Cari Aduan..." />
                        <input type="date" id="search-date" name="search_date"
                            class="hidden p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form> --}}
            <!-- Tombol Tambah Data dan Download Data -->

        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-black uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No.</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Username</th>
                        <th scope="col" class="px-6 py-3">Role</th>
                        <th scope="col" colspan="2" class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $key => $item)
                        <tr
                            class="{{ $key % 2 == 0 ? 'bg-gray-50 dark:bg-gray-800' : 'bg-white dark:bg-gray-900' }} border-b dark:border-gray-700">
                            <td class="px-4 py-4">{{ $key + 1 }}</td>
                            <td class="px-6 py-4">{{ $item->email ?? '' }}</td>
                            <td class="px-6 py-4">{{ $item->username ?? '' }}</td>
                            <td class="px-6 py-4">
                                <form action="{{ route('superadmin.updateStatus', $item->id) }}" method="POST"
                                    onsubmit="updateStatus(this);">
                                    @csrf
                                    @method('PATCH')
                                    <select name="role" class="border border-gray-400 px-3 py-1 rounded-md"
                                        onchange="updateStatus(this.form)">
                                        <option value="admin_peta" {{ $item->role == 'admin_peta' ? 'selected' : '' }}>
                                            Peta
                                        </option>
                                        <option value="admin_posyandu"
                                            {{ $item->role == 'admin_posyandu' ? 'selected' : '' }}>Posyandu
                                        </option>
                                        <option value="admin_pengaduan"
                                            {{ $item->role == 'admin_pengaduan' ? 'selected' : '' }}>Pengaduan
                                        </option>
                                        <option value="admin_agenda"
                                            {{ $item->role == 'admin_agenda' ? 'selected' : '' }}>Agenda
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td class="px-1 py-4">
                                <a href="{{ route('superadmin.view', $item->id) }}"
                                    class="font-medium bg-blue-200 px-5 py-2 hover:bg-blue-300 rounded-lg text-blue-600 dark:text-blue-500">Detail</a>
                               </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @include('superadmin.components.pagination')
        </div>

    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
   @include('posyandu.components.head')
</head>
<body>
 
@include('posyandu.components.sidebar')

 <div class="p-4 sm:ml-64">

<!-- Breadcrumb -->
<nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700" aria-label="Breadcrumb">
  <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
    <li>
      <div class="flex items-center">
        <a href="/posyandu/balita" class="ms-1 text-xl font-medium">DATA POSYANDU BALITA</a>
      </div>
    </li>
  </ol>
</nav>


<br>

<div class="flex justify-between items-center mb-6">

    <!-- Formulir pencarian -->
    <form class="flex items-center max-w-lg w-full" action="{{ url('posyandu/balita') }}" method="GET">
        <div class="flex items-center w-full">
            <select name="category" id="dropdown-button" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                <option value="all">Semua Kategori</option>
                <option value="posyandu">Posyandu</option>
                <option value="nama">Nama</option>
                <option value="tanggal">Tanggal</option>
            </select>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" name="search" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Posyandu atau Nama..." />
                <input type="date" id="search-date" name="search_date" class="hidden block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>

    
</div>

<!-- Tombol Tambah Data dan Download Data -->
    <div class="flex gap-2 mb-6">
        <a href="/posyandu/balita/create"
            class="bg-blue-200 hover:bg-blue-300 font-bold text-blue-600 px-3 py-2 rounded-md "> Tambah Data
        </a>
        <a href="/posyandu/balita/export"
            class="bg-green-200 hover:bg-green-300 font-bold text-green-600 px-3 py-2 rounded-md flex items-center">
            <!-- Icon download -->
            <svg class="flex-shrink-0 w-5 h-5 text-gray transition duration-75 group-hover:text-gray dark:group-hover:text-gray"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 25 25">
                <path fill-rule="evenodd"
                    d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z"
                    clip-rule="evenodd" />
                <path
                    d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" />
            </svg>
            <span class="hidden sm:inline-block ms-2">Export CSV</span>
        </a>
        <a href="{{ route('balita.filter') }}"
            class="bg-green-200 hover:bg-green-300 font-bold text-green-600 px-3 py-2 rounded-md flex items-center">
            <!-- Icon download -->
            <svg class="flex-shrink-0 w-5 h-5 text-gray transition duration-75 group-hover:text-gray dark:group-hover:text-gray"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 25 25">
                <path fill-rule="evenodd"
                    d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z"
                    clip-rule="evenodd" />
                <path
                    d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" />
            </svg>
            <span class="hidden sm:inline-block ms-2">Export Filtered CSV</span>
        </a>

    </div>
<!-- Toast message -->

    @if(session('success'))
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    @if(session('error'))
        <div id="toast-error" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('error') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-error" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif
{{--  end of toast  --}}

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-black uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Posyandu
                </th>
                <th scope="col" class="px-6 py-3">
                    RT/RW
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Umur
                </th>
                <th scope="col" class="px-6 py-3">
                    Berat Badan
                </th>
                <th scope="col" class="px-6 py-3">
                    Tinggi Badan
                </th>
                <th scope="col" class="px-6 py-3">
                    Lingkar Kepala
                </th>
                <th scope="col" class="px-6 py-3">
                    Lingkar Lengan
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    Status Stunting
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan Lain
                </th>
                <th scope="col" colspan="2" class="px-6 py-3 text-center">
                    Action
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($balitas as $index => $balita)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-4 py-4">
                        {{ $index + 1 }}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $balita->nama_posyandu }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->rt }}/{{ $balita->rw }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->umur_tahun }} Tahun {{ $balita->umur_bulan }} Bulan
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->berat_badan }} kg
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->tinggi_badan }} cm
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->lingkar_kepala }} cm
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->lingkar_lengan }} cm
                    </td>
                    <td class="px-6 py-4">
                        {{ \Carbon\Carbon::parse($balita->tanggal)->format('d F Y') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->status_stunting }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $balita->keterangan_lain }}
                    </td>
                    <td class="px-1 py-4">
                        <a href="{{ url('posyandu/balita/edit', ['id' => $balita->id]) }}" class="font-medium bg-blue-200 px-5 py-2 hover:bg-blue-300 rounded-lg text-blue-600 dark:text-blue-500">
                            Edit
                        </a>
                    </td>

                    <td class="px-1 py-4">
                        <!-- Tombol untuk membuka modal -->
                        <button 
                            data-modal-target="popup-modal" 
                            data-modal-toggle="popup-modal" 
                            data-url="{{ url('posyandu/balita/delete', $balita->id) }}" 
                            class="font-medium bg-red-200 px-5 py-2 hover:bg-red-300 rounded-lg text-red-600 dark:text-red-500">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Modal konfirmasi -->
    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Anda yakin untuk menghapus data balita?</h3>
                    <form id="delete-form" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya
                        </button>
                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak, cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 </div>
 
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toastSuccess = document.getElementById('toast-success');
            if (toastSuccess) {
                // Auto-hide toast after 5 seconds
                setTimeout(function () {
                    toastSuccess.style.opacity = '0';
                    setTimeout(function () {
                        toastSuccess.style.display = 'none';
                    }, 300);
                }, 5000);
            }

            const toastError = document.getElementById('toast-error');
            if (toastError) {
                // Auto-hide toast after 5 seconds
                setTimeout(function () {
                    toastError.style.opacity = '0';
                    setTimeout(function () {
                        toastError.style.display = 'none';
                    }, 300);
                }, 5000);
            }

            // Close button functionality
            const closeButtonSuccess = toastSuccess ? toastSuccess.querySelector('[data-dismiss-target="#toast-success"]') : null;
            if (closeButtonSuccess) {
                closeButtonSuccess.addEventListener('click', function () {
                    toastSuccess.style.opacity = '0';
                    setTimeout(function () {
                        toastSuccess.style.display = 'none';
                    }, 300);
                });
            }

            const closeButtonError = toastError ? toastError.querySelector('[data-dismiss-target="#toast-error"]') : null;
            if (closeButtonError) {
                closeButtonError.addEventListener('click', function () {
                    toastError.style.opacity = '0';
                    setTimeout(function () {
                        toastError.style.display = 'none';
                    }, 300);
                });
            }

            const deleteButtons = document.querySelectorAll('[data-modal-toggle="popup-modal"]');
            const modal = document.getElementById('popup-modal');
            const deleteForm = document.getElementById('delete-form');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    const url = this.dataset.url;
                    deleteForm.action = url; // Set the form action URL to the button's data-url attribute
                    modal.classList.remove('hidden'); // Show the modal
                });
            });

            // Hide the modal when clicking on the close button
            document.querySelectorAll('[data-modal-hide="popup-modal"]').forEach(button => {
                button.addEventListener('click', function() {
                    modal.classList.add('hidden'); // Hide the modal
                });
            });

            const categorySelect = document.getElementById('dropdown-button');
            const searchInput = document.getElementById('search-dropdown');
            const dateInput = document.getElementById('search-date');

            categorySelect.addEventListener('change', function() {
                if (this.value === 'tanggal') {
                    searchInput.classList.add('hidden');
                    dateInput.classList.remove('hidden');
                } else {
                    searchInput.classList.remove('hidden');
                    dateInput.classList.add('hidden');
                }
            });
        });
    </script>

</html>
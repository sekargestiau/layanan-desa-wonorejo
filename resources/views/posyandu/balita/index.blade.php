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
    <form class="flex items-center max-w-lg w-full">
        <div class="flex items-center w-full">
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
                Semua Kategori
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Posyandu</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nama</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tanggal</button>
                    </li>
                </ul>
            </div>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Posyandu, Nama, Tanggal..." required />
                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>
    <!-- Tombol Tambah Data dan Download Data -->
    <div class="flex gap-2">
        <a href="/posyandu/balita/create" class="inline-block">
        <button class="bg-blue-200 hover:bg-blue-300 font-bold text-blue-600 px-3 py-2 rounded-md">
            Tambah Data
        </button>
        </a>
        <button class="bg-gray-200 hover:bg-gray-300 font-bold text-gray-600 px-3 py-2 rounded-md flex items-center">
            <!-- Icon download -->
            <svg class="flex-shrink-0 w-5 h-5 text-gray transition duration-75 group-hover:text-gray dark:group-hover:text-gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 25 25">
                <path fill-rule="evenodd" d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z" clip-rule="evenodd"/>
                <path d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z"/>
            </svg>
            Download Data
        </button>
    </div>
</div>

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
                    Tanggal
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
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-4 py-4">
                    1
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Blimbing
                </th>
                <td class="px-6 py-4">
                    1/1
                </td>
                <td class="px-6 py-4">
                    John Doe
                </td>
                <td class="px-6 py-4">
                    10 Tahun 2 Bulan
                </td>
                <td class="px-6 py-4">
                    100 cm
                </td>
                <td class="px-6 py-4">
                    15 kg
                </td>
                <td class="px-6 py-4">
                    30 cm
                </td>
                <td class="px-6 py-4">
                    19 Juli 2024
                </td>
                <td class="px-6 py-4">
                    Sehat Jasmani dan Rohani
                </td>
                <td class="px-1 py-4">
                    <a href="#" class="font-medium bg-blue-200 px-5 py-2 hover:bg-blue-300 rounded-lg text-blue-600 dark:text-blue-500 ">Edit</a>
                </td>
                <td class="px-1 py-4">
                    <a href="#" class="font-medium bg-red-200 px-5 py-2 hover:bg-red-300 rounded-lg text-red-600 dark:text-red-500 ">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

 </div>
 
</body>
</html>
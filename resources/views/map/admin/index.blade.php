@extends('map.components.main')
@section('content')
    <div class="flex gap-2 mb-6">
        <a href="{{ route('peta.create') }}"
            class="bg-blue-200 hover:bg-blue-300 font-bold text-blue-600 px-3 py-2 rounded-md "> Tambah Data
        </a>
        <a href="{{ route('peta.export') }}"
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


        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
            class="px-3 py-2 rounded-md  bg-orange-200 hover:bg-orange-300 font-bold text-orange-600 flex items-center"
            type="button">
            <svg class="flex-shrink-0 w-5 h-5 text-gray transition duration-75 group-hover:text-gray dark:group-hover:text-gray"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 25 25">
                <path fill-rule="evenodd"
                    d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z"
                    clip-rule="evenodd" />
                <path
                    d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" />
            </svg>
            <span class="hidden sm:inline-block ms-2">Import CSV</span>
        </button>

        <div id="popup-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <form action="{{ route('peta.import') }}" method="POST" enctype="multipart/form-data"
                            class="flex flex-col items-center gap-4">
                            @csrf
                            <input type="file" name="file" accept=".csv"
                                class="border rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">

                            <div class="flex gap-4 mt-4">
                                <button type="submit"
                                    class="text-blue-500 font-semibold bg-blue-200 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Import
                                </button>
                                <button type="button" data-modal-hide="popup-modal" id="close-import-modal"
                                    class="bg-red-200 hover:bg-red-300 font-bold text-red-600 rounded-md px-5 py-2.5 text-sm">
                                    Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-black uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Dusun
                    </th>
                    <th scope="col" class="px-6 py-3">
                        RW
                    </th>
                    <th scope="col" class="px-6 py-3">
                        RT
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Koordinat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $peta)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $peta->dusun }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $peta->rw }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $peta->rt }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $peta->destinasi }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('peta.view', $peta->id) }}"
                                class="font-medium bg-blue-200 px-5 py-2 hover:bg-blue-300 rounded-lg text-blue-600 dark:text-blue-500 ">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example"
            class="flex justify-center py-3 text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            <ul class="inline-flex -space-x-px text-sm mx-auto">
                <li>
                    <a href="{{ $data->previousPageUrl() }}"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg 
                   {{ $data->onFirstPage() ? 'text-gray-300 cursor-not-allowed pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700' : 'hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' }}"
                        @if ($data->onFirstPage()) aria-disabled="true" tabindex="-1" @endif>
                        < </a>
                </li>

                @for ($i = 1; $i <= $data->lastPage(); $i++)
                    <li>
                        <a href="{{ $data->url($i) }}"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 
                       {{ $data->currentPage() == $i ? 'bg-blue-500 text-white' : 'bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' }}">
                            {{ $i }}
                        </a>
                    </li>
                @endfor

                <li>
                    <a href="{{ $data->nextPageUrl() }}"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg 
                   {{ $data->hasMorePages() ? 'hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' : 'text-gray-300 cursor-not-allowed pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700' }}"
                        @if (!$data->hasMorePages()) aria-disabled="true" tabindex="-1" @endif>
                        >
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection

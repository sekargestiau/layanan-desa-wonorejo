@extends('map.components.main')
@section('content')
    <a href="{{ route('peta.create') }}"
        class="bg-blue-200 hover:bg-blue-300 font-bold text-blue-600 px-3 py-2 rounded-md mb-6"> Tambah Data
    </a>
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

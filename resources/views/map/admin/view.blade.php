@extends('map.components.main')

@section('content')
    <div class="w-full mt-6 mx-auto">

        <div
            class="md:w-1/2 mx-auto bg-white border border-gray-200 shadow-lg dark:bg-gray-900 p-6 rounded-lg transform transition-all hover:scale-105 hover:shadow-2xl">
            <a href="{{ route('peta.admin') }}"
                class="text-blue-600  bg-blue-300 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600 dark:focus:ring-indigo-700">Kembali</a>

            <form action="{{ route('peta.update') }}" method="POST" enctype="multipart/form-data" class="mt-6">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $peta->id }}">
                <div class="mb-5">
                    <label for="dusun"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Dusun</label>
                    <input type="text" id="dusun" name="dusun"
                        class="bg-gray-100 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-300 dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                        value="{{ $peta->dusun }}" />
                </div>

                <div class="mb-5">
                    <label for="rw"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">RW</label>
                    <input type="text" id="rw" name="rw"
                        class="bg-gray-100 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-300 dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                        value="{{ $peta->rw }}" />
                </div>

                <div class="mb-5">
                    <label for="rt"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">RT</label>
                    <input type="text" id="rt" name="rt"
                        class="bg-gray-100 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-300 dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                        value="{{ $peta->rt }}" />
                </div>

                <div class="mb-5">
                    <label for="destinasi"
                        class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Destinasi</label>
                    <input type="text" id="destinasi" name="destinasi"
                        class="bg-gray-100 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-300 dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                        value="{{ $peta->destinasi }}" />
                </div>

                {{-- Submit Button --}}
                <button type="submit"
                    class="text-blue-600  bg-blue-300 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600 dark:focus:ring-indigo-700">Ubah Data</button>
            </form>
            <form action="{{ route('peta.delete', $peta->id) }}" method="POST" class="mt-3">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="text-red-600  bg-red-300 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-orange-300-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-orange-700">Hapus
                    Data</button>
            </form>
        </div>
    </div>
@endsection

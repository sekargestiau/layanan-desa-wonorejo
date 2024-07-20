<!DOCTYPE html>
<html lang="en">
@include('map.components.head')

<body>
    <section class="h-screen w-full ">
        <div
            class="flex flex-col items-center md:justify-center w-full h-1/4 pb-3 text-white  bg-gradient-to-r from-sky-800 from-10%   to-green-600 to-80%">
            <h1 class="text-xl font-bold text-center uppercase mt-3">
                Selamat Datang
            </h1>
            <div class="flex  h-3/5 space-x-2  w-4/5 sm:justify-center sm:w-72 mt-4  mx-auto">
                <div class="h-20 w-20 mt-2 ">
                    <img src='{{ asset('Logo.png') }}' alt="logo" class="w-full h-full" />
                </div>
                <div class="flex flex-col ms-2 w-full h-full -space-y-1 mt-1 ">
                    <p class="text-sm font-semibold"> Peta Desa </p>
                    <h1 class="text-lg font-bold uppercase">Desa Wonorejo</h1>
                    <p class="text-sm font-thin"> Kecamatan Polokarto</p>
                    <p class="text-sm font-thin ">
                        Kabupaten Sukoharjo
                    </p>
                    <p class="text-sm font-semibold"></p>
                </div>
            </div>
        </div>

        <div class="flex flex-col">
            <p
                class="text-black bg-white text-center sm:w-64 py-2 px-4 text-lg rounded-md w-3/4 mx-auto mt-4 font-bold">
                Tentukan tujuan Anda
            </p>
            <select name="lokasi" id="lokasi"
                class="text-black bg-gradient-to-r text-center py-2 px-4 sm:w-80 rounded-md w-3/4 mx-auto mt-4 font-semibold">
                <option value="1">Pilih Lokasi</option>
                <option value="2">Lokasi 1</option>
                <option value="3">Lokasi 2</option>
                <option value="4">Lokasi 3</option>
            </select>
            <a href='https://www.google.com/maps/dir/?api=1&destination=-7.6221348,110.8891758'
                class="text-white sm:w-80 bg-gradient-to-r text-center from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 py-2 px-4 rounded-md w-3/4 mx-auto mt-4 font-semibold">
                {{-- text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 --}}
                Lihat Peta
            </a>
        </div>
    </section>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    <section class="h-screen w-full border border-red-500">
        <div
            class="flex flex-col items-center md:justify-center w-full h-1/4 pb-3 text-white  bg-gradient-to-r from-sky-800 from-10%   to-green-600 to-80%">
            <h1 class="text-xl font-bold text-center uppercase mt-3">
                Selamat Datang
            </h1>
            <div class="flex  h-3/5 space-x-2  w-4/5 sm:justify-center sm:w-1/4 mt-4 border mx-auto border-red-500">
                <div class="h-20 w-20 mt-2 border">
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
            <p class="text-white bg-gradient-to-r text-center from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 py-2 px-4 rounded-md w-3/4 mx-auto mt-4 font-semibold">
                {{-- text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 --}}
                <a href="#">Tentukan Lokasi Anda</a>
            </p>
            <select name="pilih_lokasi" id="pilih_lokasi" class="text-black bg-gradient-to-r text-center py-2 px-4 rounded-md w-3/4 mx-auto mt-4 font-semibold">
                <option value="1">Pilih RW</option>
                <option value="2">Lokasi 1</option>
                <option value="3">Lokasi 2</option>
                <option value="4">Lokasi 3</option>
            </select>
            <select name="pilih_lokasi" id="pilih_lokasi" class="text-black bg-gradient-to-r text-center py-2 px-4 rounded-md w-3/4 mx-auto mt-4 font-semibold">
                <option value="1">Pilih RT</option>
                <option value="2">Lokasi 1</option>
                <option value="3">Lokasi 2</option>
                <option value="4">Lokasi 3</option>
            </select>
            <a  href='https://www.google.com/maps/dir/?api=1&destination=-7.6221348,110.8891758' class="text-white bg-gradient-to-r text-center from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 py-2 px-4 rounded-md w-3/4 mx-auto mt-4 font-semibold">
                {{-- text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 --}}
                Lihat Peta
            </a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d3954.5481390364284!2d110.88585821052176!3d-7.62404354235974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e0!4m3!3m2!1d-7.6260559!2d110.8878391!4m3!3m2!1d-7.6221347999999995!2d110.88917579999999!5e0!3m2!1sen!2sid!4v1721229371425!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</body>

</html>

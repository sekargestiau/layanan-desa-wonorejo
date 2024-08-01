<!DOCTYPE html>
<html lang="en">
@include('pengaduan.components.head')

<body>
    <section class="h-screen w-full">
        <div
            class="flex flex-col items-center md:justify-center w-full h-1/4 pb-3 text-white bg-gradient-to-r from-sky-800 to-green-600">
            <h1 class="text-xl font-bold text-center uppercase mt-3">
                Selamat Datang
            </h1>
            <div class="flex h-3/5 space-x-2 w-4/5 sm:justify-center sm:w-1/4 mt-4 mx-auto">
                <div class="h-20 w-20 mt-2">
                    <img src='{{ asset('Logo.png') }}' alt="logo" class="w-full h-full" />
                </div>
                <div class="flex flex-col ms-2 w-full h-full -space-y-1 mt-1">
                    <p class="text-sm font-semibold"> Layanan Pengaduan </p>
                    <h1 class="text-lg font-bold uppercase">Desa Wonorejo</h1>
                    <p class="text-sm font-thin"> Kecamatan Polokarto</p>
                    <p class="text-sm font-thin">
                        Kabupaten Sukoharjo
                    </p>
                    <p class="text-sm font-semibold"></p>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 border rounded-lg mx-auto my-8 max-w-2xl">
            <h2 class="text-2xl font-medium mb-4">Form Pengaduan Masyarakat</h2>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <strong class="font-bold">{{ session('success') }}</strong>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <strong class="font-bold">Whoops! Something went wrong.</strong>
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/pengaduan" method="post" enctype="multipart/form-data" onsubmit="return validateCaptcha()">
                @csrf
                <div class="mb-4">
                    <label for="nik" class="block text-gray-700 font-medium mb-2">NIK <span
                            class="text-red-500">(opsional)</span></label>
                    <input type="text" id="nik" name="nik"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input type="text" id="name" name="name"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email <span
                            class="text-red-500">(opsional)</span></label>
                    <input type="email" id="email" name="email"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Telepon</label>
                    <input type="tel" id="phone" name="phone"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        required>
                </div>
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Judul</label>
                    <input type="text" id="title" name="title"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah
                        Foto <span class="text-red-500">(opsional)</span></label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" name="file_input[]" type="file" multiple>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Isi Pengaduan</label>
                    <textarea id="message" name="message"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" rows="5"
                        required></textarea>
                </div>
                <div class="g-recaptcha m-4 " data-sitekey={{ config('services.recaptcha.key') }}></div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-red-500 text-black px-4 py-2 rounded-lg hover:bg-red-600">Submit</button>
                </div>
            </form>
        </div>
    </section>



    <script>
        function validateCaptcha() {
            var captchaResponse = grecaptcha.getResponse();
            if (captchaResponse.length === 0) {
                alert("Tolong Selesaikan Verifikasi CAPTCHA");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>

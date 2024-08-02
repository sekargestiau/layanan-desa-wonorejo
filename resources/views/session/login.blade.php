<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('Logo.png') }}" type="image/png">

    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>

<body class="bg-gradient-to-br from-green-400 via-emerald-500 to-cyan-500">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div id="toast-danger"
                class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ $error }}</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-danger" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endforeach

    @endif
    @if (session('success'))
        <div id="toast-success"
            class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session()->get('success') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <div class="h-screen w-screen border border-red-500 flex justify-center items-center">
        <div
            class="flex justify-center items-center max-sm:w-11/12 max-lg:w-11/12  w-2/3 h-4/5 bg-white rounded-2xl border shadow-md">
            <div
                class="w-3/5 bg-gradient-to-b from-sky-600 to-green-500 rounded-l-2xl border border-r-2 border-r-black max-sm:hidden flex flex-col items-center py-6  h-full">
                <img src="{{ asset('Logo.png') }}" alt="Logo Sukoharjo" class="w-24 h-32">
                <h2 class="text-lg lg:text-2xl font-semibold text-white">Wonorejo Religius dan Berbudaya</h2>
                <h2 class="text-3xl lg:text-4xl font-semibold text-white">Desa Wonorejo</h2>
                <h2 class="text-xl mt-3 font-semibold text-white">VISI</h2>
                <p class="mt-2 text-justify mx-12 text-white text-sm">DENGAN SEMANGAT PERSAUDARAAN, GOTONG ROYONG DAN
                    AKHLAK MULIA GUNA MEWUJUDKAN DESA LANGKAP YANG LUAR BIASA</p>
                <h2 class="text-xl mt-2 font-semibold text-white">MISI</h2>
                <p class="mt-2 text-justify mx-12 text-white text-sm">
                    Melanjutkan program yang telah dilaksanakan dan memelihara program-program yang sudah dilaksanakan
                    oleh pemerintah Desa Langkap periode yang lalu sesuai dengan fungsinya.

                    Menggali, memberdayakan serta memaksimalkan semua potensi yang ada di masyarakat, meliputi :

                    Pemberdayaan Sumber Daya Manusia (SDM)
                    Pemberdayaan Sumber Daya Alam (SDA)
                    Pemberdayaan Ekonomi Kerakyatan
                    Menciptakan kondisi masyarakat Desa Langkap yang aman, tertib, guyub dan rukun dalam kehidupan
                    bermasyarakat.
                </p>

            </div>
            <div class="w-2/5  max-sm:w-full  h-full">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="flex flex-col items-center">
                        <h2 class="text-2xl font-semibold text-green-500 mt-4">Login</h2>
                        <svg class="w-52 h-52 text-green-400 my-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                                clip-rule="evenodd" />
                        </svg>

                        <div class="w-3/4 mt-4">
                            <label for="username" class="text-green-500">Username</label>
                            <input type="text" name="username" id="username"
                                class="w-full bg-blue-200 text-green-500 px-3 py-2 rounded-md mt-2">
                        </div>
                        <div class="w-3/4 mt-4">
                            <label for="password" class="text-green-500">Password</label>
                            <input type="password" name="password" id="password"
                                class="w-full bg-blue-200 text-green-500 px-3 py-2 rounded-md mt-2">
                        </div>
                        <button type="submit"
                            class="bg-blue-200 hover:bg-blue-300 font-bold text-blue-600 px-3 py-2 rounded-md mt-4">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

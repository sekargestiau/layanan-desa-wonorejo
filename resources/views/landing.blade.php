<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Desa Wonorejo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-400 via-emerald-500 to-cyan-500 min-h-screen">
    <nav class="bg-white shadow-lg fixed w-full top-0 left-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <img src="{{ asset('Logo.png') }}" alt="Logo" class="h-10 w-8 mr-4">
                            <span class="font-semibold text-gray-500 text-lg">Layanan Desa Wonorejo</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('peta.map') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Peta</a>
                    <a href="{{ route('pengaduan') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Pengaduan</a>
                    <a href="{{ route('agenda.index') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Agenda</a>
                    @if (Auth::check())
                    <a href="{{ route('logout') }} " class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Logout</a>
                    @else
                    <a href="{{ route('loginPage') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Login</a>
                    @endif
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-green-500"
                            x-show="!showMenu"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li><a href="#" class="block text-sm px-2 py-4 text-gray-500 hover:bg-green-500 hover:text-white transition duration-300">Peta</a></li>
                <li><a href="#" class="block text-sm px-2 py-4 text-gray-500 hover:bg-green-500 hover:text-white transition duration-300">Pengaduan</a></li>
                <li><a href="#" class="block text-sm px-2 py-4 text-gray-500 hover:bg-green-500 hover:text-white transition duration-300">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Spacer to prevent content from being hidden under the fixed navbar -->
    <div class="h-16"></div>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="p-8 bg-gradient-to-b from-cyan-500 to-green-500 text-center">
                <img src="{{ asset('Logo.png') }}" alt="Logo" class="w-24 h-32 mx-auto">
                <h2 class="text-2xl font-semibold text-white mt-4">Wonorejo Religius dan Berbudaya</h2>
                <h1 class="text-4xl font-bold text-white mt-2">Desa Wonorejo</h1>
            </div>

            <div class="p-8">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">VISI</h3>
                <p class="text-gray-600 mb-6">DENGAN SEMANGAT PERSAUDARAAN, GOTONG ROYONG DAN AKHLAK MULIA GUNA MEWUJUDKAN DESA LANGKAP YANG LUAR BIASA</p>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">MISI</h3>
                <p class="text-gray-600 mb-6">Melanjutkan program yang telah dilaksanakan dan memelihara program-program yang sudah dilaksanakan oleh pemerintah Desa Langkap periode yang lalu sesuai dengan fungsinya. Menggali, memberdayakan serta memaksimalkan semua potensi yang ada di masyarakat, meliputi:</p>
                <ul class="list-disc list-inside text-gray-600 mb-6">
                    <li>Pemberdayaan Sumber Daya Manusia (SDM)</li>
                    <li>Pemberdayaan Sumber Daya Alam (SDA)</li>
                    <li>Pemberdayaan Ekonomi Kerakyatan</li>
                    <li>Menciptakan kondisi masyarakat Desa Langkap yang aman, tertib, guyub dan rukun dalam kehidupan bermasyarakat.</li>
                </ul>

                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Tentang Kami</h2>
                <p class="text-gray-600 mb-4">Desa Wonorejo adalah sebuah desa yang terletak di Kabupaten Sukoharjo, Jawa Tengah. Kami berkomitmen untuk membangun masyarakat yang religius dan berbudaya.
                                              Nilai-nilai yang kami junjung tinggi meliputi:</p>
                <ul class="list-disc list-inside text-gray-600 mb-4">
                    <li>Gotong Royong</li>
                    <li>Persaudaraan</li>
                    <li>Akhlak Mulia</li>
                    <li>Pemberdayaan Masyarakat</li>
                </ul>
                <p class="text-gray-600">Dengan berlandaskan pada nilai-nilai ini, kami terus berupaya untuk memajukan desa dan meningkatkan kesejahteraan masyarakat kami.</p>
            </div>
        </div>
    </div>

    <script>
        // Grab HTML Elements
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        // Add Event Listeners
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>

<footer class="bg-white text-gray-600 py-4 shadow-lg">
    <div class="container mx-auto px-4 text-center">
        <p>&copy; 2024 Desa Wonorejo. All rights reserved.</p>
    </div>
</footer>
</html>
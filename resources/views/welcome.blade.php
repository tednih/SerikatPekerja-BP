<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serikat Pekerja BP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-green-800 font-sans antialiased">

    <!-- NAVBAR (Minimalist Premium) -->
    <nav class="backdrop-blur bg-white/70 border-b border-green-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex gap-2">
                <img class="w-50 h-10" src="{{ asset('images/logobp2.png') }}" alt="Logo">
                <img class="w-10 h-10" src="{{ asset('images/logosp.jpeg') }}" alt="Logo">
            </div>

            <button class="md:hidden p-2 rounded-lg border border-green-300" id="burgerBtn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <ul class="hidden md:flex gap-8 text-sm font-medium text-green-600" id="menuList">
                <li><a href="#" class="hover:text-green-900 transition">Beranda</a></li>
                <li><a href="#" class="hover:text-green-900 transition">Tentang Kami</a></li>
                <li><a href="/keanggotaan" class="hover:text-green-900 transition">Keanggotaan</a></li>
                <li><a href="#" class="hover:text-green-900 transition">Berita</a></li>
                <li><a href="#" class="hover:text-green-900 transition">Agenda</a></li>
                <li><a href="#" class="hover:text-green-900 transition">Dokumen</a></li>
                <li><a href="#" class="hover:text-green-900 transition">Kontak</a></li>
            </ul>
        </div>

        <!-- MOBILE MENU -->
        <ul id="mobileMenu" class="md:hidden hidden bg-white border-t border-green-200 px-6 pb-4 space-y-3">
            <li><a href="#" class="block py-2 text-green-700">Beranda</a></li>
            <li><a href="#" class="block py-2 text-green-700">Tentang Kami</a></li>
            <li><a href="#" class="block py-2 text-green-700">Keanggotaan</a></li>
            <li><a href="#" class="block py-2 text-green-700">Berita</a></li>
            <li><a href="#" class="block py-2 text-green-700">Agenda</a></li>
            <li><a href="#" class="block py-2 text-green-700">Dokumen</a></li>
            <li><a href="#" class="block py-2 text-green-700">Kontak</a></li>
        </ul>
    </nav>

    <!-- HERO SECTION (Minimalist Premium) -->

    <section class="relative min-h-[450px] md:min-h-[550px] lg:min-h-[650px] overflow-hidden flex items-center">

        <!-- Slideshow Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center animate-fade1"
                style="background-image: url('{{ asset('images/dokumentasi/IMG_6807.JPG') }}');"></div>

            <div class="absolute inset-0 bg-cover bg-center animate-fade2"
                style="background-image: url('{{ asset('images/dokumentasi/IMG_6772.JPG') }}');"></div>

            <div class="absolute inset-0 bg-cover bg-center animate-fade3"
                style="background-image: url('{{ asset('images/dokumentasi/IMG_6956.JPG') }}');"></div>
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-green-50/80 to-green-100/80 backdrop-blur-xs z-10"></div>

        <!-- Content Center -->
        <div class="relative z-20 max-w-5xl mx-auto text-center px-6">
            <h1 class="text-5xl font-extrabold tracking-tight text-green-900">Serikat Pekerja BP</h1>
            <p class="text-lg text-green-700 mt-4 max-w-2xl mx-auto">
                Bersatu untuk kesejahteraan dan masa depan pekerja yang lebih baik.
            </p>
            <div class="mt-10">
                <a href="#" class="px-8 py-3 bg-green-900 text-white rounded-lg shadow hover:bg-gray-700 transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>

    </section>

    <style>
        @keyframes fade {

            0%,
            100% {
                opacity: 1;
            }

            33% {
                opacity: 0;
            }

            66% {
                opacity: 0;
            }
        }

        .animate-fade1 {
            animation: fade 12s infinite;
        }

        .animate-fade2 {
            animation: fade 12s infinite;
            animation-delay: 4s;
        }

        .animate-fade3 {
            animation: fade 12s infinite;
            animation-delay: 8s;
        }
    </style>

    <!-- BERITA TERBARU (Premium Clean Cards) -->
    <main class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-center mb-12 text-green-900">Berita Terbaru</h2>

        <div class="grid md:grid-cols-3 gap-10">

            <div class="bg-white border border-green-200 rounded-xl shadow-sm hover:shadow-md transition">
                <img src="https://source.unsplash.com/600x300/?meeting,union" class="w-full rounded-t-xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-900">Rapat Tahunan Serikat</h3>
                    <p class="mt-2 text-green-600">Pembahasan strategi kesejahteraan pekerja.</p>
                </div>
            </div>

            <div class="bg-white border border-green-200 rounded-xl shadow-sm hover:shadow-md transition">
                <img src="https://source.unsplash.com/600x300/?workers" class="w-full rounded-t-xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-900">Pelatihan K3 untuk Anggota</h3>
                    <p class="mt-2 text-green-600">Sesi edukasi keselamatan kerja.</p>
                </div>
            </div>

            <div class="bg-white border border-green-200 rounded-xl shadow-sm hover:shadow-md transition">
                <img src="https://source.unsplash.com/600x300/?industry" class="w-full rounded-t-xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-900">Kolaborasi Serikat Nasional</h3>
                    <p class="mt-2 text-green-600">Penguatan jaringan serikat pekerja.</p>
                </div>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-green-900 text-green-300 py-10 text-center text-sm">
        © 2025 Serikat Pekerja BP — Profesional • Solid • Mandiri
    </footer>

    <script>
        const burgerBtn = document.getElementById('burgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        burgerBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    </script>
</body>

</html>
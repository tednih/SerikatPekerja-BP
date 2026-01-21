</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Serikat Pekerja BP' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white font-sans">

    {{-- NAVBAR --}}
    <nav class="backdrop-blur bg-white/80 border-b border-green-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <img class="h-10 w-auto" src="{{ asset('images/logobp2.png') }}" alt="Logo BP">
                <img class="h-10 w-10" src="{{ asset('images/logosp.jpeg') }}" alt="Logo SP">
            </div>

            {{-- Burger --}}
            <button id="burgerBtn"
                class="md:hidden p-2 rounded-lg border border-green-300 text-green-700 hover:bg-green-50 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            {{-- Desktop Menu --}}
            <ul class="hidden md:flex gap-8 text-sm font-medium text-green-700">
                <li><a href="/" class="hover:text-green-900">Beranda</a></li>
                <li><a href="/tentang" class="hover:text-green-900">Tentang Kami</a></li>
                <li><a href="/keanggotaan" class="hover:text-green-900">Keanggotaan</a></li>
                <li><a href="/berita" class="hover:text-green-900">Berita</a></li>
                <li><a href="/agenda" class="hover:text-green-900">Agenda</a></li>
                <li><a href="/dokumen" class="hover:text-green-900">Dokumen</a></li>
                <li><a href="/kontak" class="hover:text-green-900">Kontak</a></li>
                @auth
                    <li class="relative group">
                        <button
                            class="flex items-center gap-1 text-sm font-medium text-green-700 hover:text-green-900 transition">
                            Anggota
                            <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute right-0 mt-3 w-56 bg-white border border-green-200 rounded-lg shadow-lg
                                               opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <a href="{{ route('member.pkb') }}"
                                class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">
                                PKB (Download)
                            </a>

                            <a href="{{ route('member.keuangan') }}"
                                class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">
                                Laporan Keuangan
                            </a>

                            <a href="{{ route('member.pengaduan') }}"
                                class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">
                                Form Pengaduan
                            </a>

                            <div class="border-t border-green-200 my-2"></div>

                            <a href="{{ route('member.index') }}"
                                class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">
                                Profile
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </li>
                @endauth

                <li>
                    @auth

                    @else
                        <a href="{{ route('login') }}" class="hover:text-green-900">
                            Login
                        </a>
                    @endauth
                </li>
            </ul>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="md:hidden absolute top-full left-0 w-64 h-screen bg-white border-t border-green-200 shadow-lg
               hidden transition-all duration-300">

            <ul class="flex flex-col divide-y divide-green-100 px-6 py-4 text-green-700 text-sm">
                <li><a href="/" class="block py-3">Beranda</a></li>
                <li><a href="/tentang" class="block py-3">Tentang Kami</a></li>
                <li><a href="/keanggotaan" class="block py-3">Keanggotaan</a></li>
                <li><a href="/berita" class="block py-3">Berita</a></li>
                <li><a href="/agenda" class="block py-3">Agenda</a></li>
                <li><a href="/dokumen" class="block py-3">Dokumen</a></li>
                <li><a href="/kontak" class="block py-3">Kontak</a></li>
                @auth
                    <li class="pt-2 border-t border-green-200">
                        <p class="text-xs uppercase text-green-500 mb-2">Menu Anggota</p>

                        <a href="{{ route('member.pkb') }}"
                            class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">
                            PKB (Download)
                        </a>

                        <a href="{{ route('member.keuangan') }}"
                            class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">
                            Laporan Keuangan
                        </a>

                        <a href="{{ route('member.pengaduan') }}"
                            class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">
                            Form Pengaduan
                        </a>

                        <div class="border-t border-green-200 my-2"></div>

                        <a href="{{ route('member.index') }}"
                            class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">
                            Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth

                <li>
                    @auth

                    @else
                        <a href="{{ route('login') }}" class="hover:text-green-900">
                            Login
                        </a>
                    @endauth
                </li>
            </ul>

        </div>
    </nav>


    {{-- CONTENT --}}
    <main class="py-16 bg-gray-50 min-h-screen">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-green-900 text-green-300 py-10 text-center text-sm">
        © 2025 Serikat Pekerja BP — Profesional • Solid • Mandiri
    </footer>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const burgerBtn = document.getElementById('burgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        if (burgerBtn && mobileMenu) {
            burgerBtn.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>


</html>
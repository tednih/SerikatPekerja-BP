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
                <li><a href="/" class="hover:text-green-900">Beranda</a></li>
                <li><a href="/tentang" class="hover:text-green-900">Tentang Kami</a></li>
                <li><a href="/keanggotaan" class="hover:text-green-900">Keanggotaan</a></li>
                <li><a href="/berita" class="hover:text-green-900">Berita</a></li>
                <li><a href="/agenda" class="hover:text-green-900">Agenda</a></li>
                <li><a href="/dokumen" class="hover:text-green-900">Dokumen</a></li>
                <li><a href="/kontak" class="hover:text-green-900">Kontak</a></li>
            </ul>
        </div>

        {{-- Mobile menu --}}
        <ul id="mobileMenu" class="md:hidden hidden bg-white border-t border-green-200 px-6 pb-4 space-y-3">
            <li><a href="/">Beranda</a></li>
            <li><a href="/tentang">Tentang Kami</a></li>
            <li><a href="/keanggotaan">Keanggotaan</a></li>
            <li><a href="/berita">Berita</a></li>
            <li><a href="/agenda">Agenda</a></li>
            <li><a href="/dokumen">Dokumen</a></li>
            <li><a href="/kontak">Kontak</a></li>
        </ul>
    </nav>

    {{-- CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-green-900 text-green-300 py-10 text-center text-sm">
        © 2025 Serikat Pekerja BP — Profesional • Solid • Mandiri
    </footer>

</body>

</html>
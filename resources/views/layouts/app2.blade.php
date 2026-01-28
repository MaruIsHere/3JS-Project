<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Object 3D')</title>

    @vite([
        'resources/css/animate.css',
        'resources/css/tailwindoutput.css',
        'resources/css/font-awesome.min.css',
        'resources/css/ionicons.min.css',
        'resources/css/main.css',
        'resources/css/style.css',
        'resources/js/main.js'
    ])
</head>

<body class="bg-[#101d22] text-gray-200">

<!-- HEADER -->
<header x-data="{open:false}" class="fixed top-0 left-0 w-full z-50 bg-[#101d22] shadow-md">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Brand -->
        <a href="/" class="text-xl font-bold text-cyan-400">Website 3D Terka</a>

        <!-- Toggle Button -->
        <button @click="open = !open" class="md:hidden text-gray-200 text-2xl">
            ☰
        </button>

        <!-- Menu -->
        <ul class="hidden md:flex space-x-6 font-medium">
            <li><a href="/data" class="hover:text-cyan-400 transition">Beranda</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition">List Terumbu Karang</a></li>
        </ul>
    </nav>

    <!-- Mobile Menu -->
    <div x-show="open" @click.outside="open=false" class="md:hidden bg-[#101d22] border-t border-gray-700">
        <ul class="flex flex-col px-6 py-4 space-y-3">
            <li><a href="/data" class="hover:text-cyan-400">Beranda</a></li>
            <li><a href="#" class="hover:text-cyan-400">List Terumbu Karang</a></li>
        </ul>
    </div>
</header>

<!-- CONTENT -->
<main class="pt-24 min-h-screen">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-[#0b1418] text-gray-400 py-12 mt-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

        <div>
            <h4 class="text-white font-semibold mb-4">Navigasi Utama</h4>
            <ul class="space-y-2">
                <li><a href="/data" class="hover:text-cyan-400">Beranda</a></li>
                <li><a href="#" class="hover:text-cyan-400">List Terumbu Karang</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-semibold mb-4">Tautan Terkait</h4>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-cyan-400">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-cyan-400">Hubungi Kami</a></li>
                <li><a href="#" class="hover:text-cyan-400">Kebijakan Privasi</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-semibold mb-4">Tentang Aplikasi</h4>
            <p>Aplikasi visualisasi 3D untuk pelestarian terumbu karang Indonesia.</p>
        </div>

    </div>

    <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm">
        <p>© 2025 3D Terumbu Karang. All Rights Reserved.</p>
        <a href="#top" class="inline-block mt-3 text-cyan-400 hover:underline">Kembali ke Atas</a>
    </div>
</footer>

<!-- AlpineJS for menu -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>
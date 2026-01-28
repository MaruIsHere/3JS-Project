<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content=""> 
	<meta name="author" content="Atheo"> 
	<title>@yield('title', 'Object 3D')</title>

    @vite(['resources/css/animate.css', 'resources/css/tailwindoutput.css', 'resources/css/font-awesome.min.css', 'resources/css/ionicons.min.css'])
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        body {
            padding-top: 80px;
        }
    </style>
</head>

<body class="bg-[#101d22]">

    <!-- NAVBAR -->
    <header x-data="{open:false}">
        <nav class="fixed top-0 left-0 w-full bg-gradient-to-br from-[#0d161a] to-[#1a2e38] text-white shadow z-50">
            <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

                <!-- Brand -->
                <a href="/" class="text-xl font-bold text-sky-400">Website 3D Terka</a>

                <!-- Button Mobile -->
               <button @click="open = !open" class="md:hidden focus:outline-none text-2xl">
				☰
				</button>

                <!-- Menu -->
                <ul class="hidden md:flex space-x-6">
                    <li><a href="{{ route('home') }}" class="hover:text-sky-400">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-sky-400">About</a></li>
                    <li><a href="{{ route('thanksfor') }}" class="hover:text-sky-400">Thanksfor</a></li>
                    <li><a href="{{ route('data.index') }}" class="hover:text-sky-400">List Terumbu Karang</a></li>
                </ul>
            </div>

            <!-- Mobile Menu -->
            <div x-show="open" class="md:hidden px-4 pb-4 space-y-2 bg-[#101d22] shadow">
                <a href="{{ route('home') }}" class="block hover:text-sky-400">Beranda</a>
                <a href="{{ route('about') }}" class="block hover:text-sky-400">About</a>
                <a href="{{ route('thanksfor') }}" class="block hover:text-sky-400">Thanksfor</a>
                <a href="{{ route('data.index') }}" class="block hover:text-sky-400">List Terumbu Karang</a>
            </div>
        </nav>
    </header>

    <!-- CONTENT -->
    <div id="wrap" class="min-h-screen">
        <div id="content">
            @yield('content')
        </div>

        <!-- FOOTER -->
        <footer class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] text-gray-300 mt-20">
            <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Navigasi -->
                <div>
                    <h5 class="text-white font-semibold mb-4">Navigasi Utama</h5>
                    <ul class="space-y-2">
                        <li><a href="/data" class="hover:text-white">Beranda</a></li>
                        <li><a href="#" class="hover:text-white">List Terumbu Karang</a></li>
                    </ul>
                </div>

                <!-- Tautan -->
                <div>
                    <h5 class="text-white font-semibold mb-4">Tautan Terkait</h5>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white">Hubungi Kami</a></li>
                        <li><a href="{{ route('thanksfor') }}" class="hover:text-white">Thanksfor</a></li>
                        <li><a href="{{ route('data.index') }}" class="hover:text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <!-- Tentang -->
                <div>
                    <h5 class="text-white font-semibold mb-4">Tentang Aplikasi</h5>
                    <p class="text-sm">Aplikasi visualisasi 3D untuk pelestarian terumbu karang Indonesia, didukung teknologi pemodelan 3D.</p>
                    <p class="text-sm mt-2">Hubungi: info@website3dterka.com</p>
                </div>

            </div>

            <div class="border-t border-gray-700 py-6 text-center text-sm">
                &copy; 2026 Website 3D Terka. All Rights Reserved.
                <div class="mt-3">
                    <a href="#wrap" class="inline-block px-4 py-2 border border-gray-500 rounded hover:bg-gradient-to-br from-[#0d161a] to-[#1a2e38]">
                        Kembali ke Atas
                    </a>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
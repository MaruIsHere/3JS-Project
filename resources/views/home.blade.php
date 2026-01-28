@extends('layouts.display')

@section('title', 'Beranda - Website 3D Terka')

@section('content')
	<div class="home-page">

		{{-- 1. HERO SECTION --}}
		<section class="relative min-h-[90vh] flex items-center justify-center text-white bg-cover bg-center"
		style="background-image: linear-gradient(rgba(0,30,60,.5), rgba(0,20,40,.7)), url('{{ asset('images/beranda.jpg') }}')">


		<div class="text-center z-10 px-6">
		<h1 class="text-4xl md:text-5xl font-extrabold mb-4 uppercase drop-shadow-lg">
		Jelajahi Keajaiban Bawah Laut <br> Secara Digital
		</h1>
		<p class="max-w-2xl mx-auto text-lg text-white/80 mb-8">
		Dokumentasi terumbu karang interaktif pertama dengan teknologi pemodelan 3D presisi tinggi.
		</p>
		<div class="flex justify-center gap-4">
		<a href="{{ route('data.index') }}"
		class="bg-sky-400 hover:bg-gradient-to-br from-[#0d161a] to-[#1a2e38] text-white px-6 py-3 font-bold rounded transition">
		Mulai Menjelajah
		</a>
		<a href="/about"
		class="border border-white text-white hover:bg-gradient-to-br from-[#0d161a] to-[#1a2e38] hover:text-white px-6 py-3 font-bold rounded transition">
		Pelajari Proyek
		</a>
		</div>
		</div>


		{{-- Scroll Indicator --}}
		<div class="absolute bottom-6 left-1/2 -translate-x-1/2 animate-bounce text-3xl">⌄</div>
		</section>

		{{-- 2. FEATURES --}}
		<section class="py-20 text-white">
		<div class="max-w-7xl mx-auto px-6">
		<div class="text-center mb-12">
		<h3 class="text-3xl font-bold">Mengapa Belajar Bersama Kami?</h3>
		</div>


		<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
		{{-- Feature Card --}}
		<div class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] shadow rounded-xl p-6 text-center hover:-translate-y-1 transition">
		<div class="mb-4 text-blue-600">
		<!-- icon tetap -->
		</div>
		<h5 class="font-bold mb-2">Visual Realistik</h5>
		<p class="text-gray-500 text-sm">Tekstur & bentuk asli dari laut Indonesia.</p>
		</div>


		<div class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] shadow rounded-xl p-6 text-center hover:-translate-y-1 transition">
		<div class="mb-4 text-green-600"></div>
		<h5 class="font-bold mb-2">Edukasi Digital</h5>
		<p class="text-gray-500 text-sm">Media belajar nyata tanpa harus menyelam.</p>
		</div>


		<div class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] shadow rounded-xl p-6 text-center hover:-translate-y-1 transition">
		<div class="mb-4 text-yellow-500"></div>
		<h5 class="font-bold mb-2">Akses 24/7</h5>
		<p class="text-gray-500 text-sm">Informasi detail kapan saja.</p>
		</div>
		</div>
		</div>
		</section>

		{{-- 3. COLLECTION --}}
		<section class="py-20 bg-gradient-to-br from-[#0d161a] to-[#1a2e38]">
		<div class="max-w-7xl mx-auto px-6">
		<div class="text-center mb-12">
		<h3 class="text-3xl font-bold text-white">Koleksi Spesimen Terbatas</h3>
		</div>


		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
		@foreach ($specimens as $item)
		<div class="bg-[#0b1418] rounded-xl shadow overflow-hidden hover:-translate-y-1 transition text-white">
		<div class="h-48 bg-gray-800 flex items-center justify-center">
		@if ($item->image)
		<img src="{{ asset('storage/products/' . $item->image) }}"
		class="w-full h-full object-cover">
		@else
		<span class="text-white text-sm">No Image</span>
		@endif
		</div>
		<div class="p-4 text-center">
		<h6 class="font-semibold truncate">{{ $item->name }}</h6>
		<a href="{{ route('object3D', $item->id) }}"
		class="inline-block mt-3 bg-sky-400 text-white text-sm px-4 py-1 rounded-full hover:bg-gradient-to-br from-[#0d161a] to-[#1a2e38]">
		Lihat 3D
		</a>
		</div>
		</div>
		@endforeach


		{{-- INFO --}}
		<div class="flex flex-col justify-center px-4">
		<h4 class="font-bold text-xl mb-3 text-white">Penganiman Interaktif 3D</h4>
		<p class="text-white text-sm mb-4">Ragam spesies model terumbu karang Indonesia.</p>
		<ul class="text-sm text-white space-y-2 mb-4">
		<li>✔ Zoom Detail Polip</li>
		<li>✔ Informasi Taksonomi</li>
		</ul>
		<a href="{{ route('data.index') }}"
		class="bg-sky-400 text-white py-2 text-center rounded font-bold hover:bg-gradient-to-br from-[#0d161a] to-[#1a2e38]">
		LIHAT DAFTAR KARANG
		</a>
		</div>
		</div>
		</div>
		</section>

		{{-- 4. CTA --}}
		<section class="py-20 text-center text-white">
		<h3 class="text-3xl font-bold mb-4">Bantu Kami Melestarikan <br> Lautan Melalui Pengetahuan</h3>
		<p class="mb-6 text-white">Punya pertanyaan atau ingin berkolaborasi?</p>
		<a href="mailto:info@website3dterka.com"
		class="bg-sky-400 text-white font-bold px-8 py-3 rounded shadow hover:bg-gradient-to-br from-[#0d161a] to-[#1a2e38]">
		HUBUNGI KAMI
		</a>
		</section>

		<!--
		{{-- 5. FOOTER --}}
		<footer class="bg-[#101d22] text-gray-300 py-16 border-t border-gray-700">
		<div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
		<div>
		<h5 class="font-bold text-white mb-3">Website 3D Terka</h5>
		<p class="text-sm text-gray-400">Aplikasi visualisasi terumbu karang Indonesia.</p>
		</div>
		<div>
		<h6 class="font-bold text-white mb-3">Navigasi</h6>
		<ul class="text-sm text-gray-400 space-y-2">
		<li><a href="#" class="hover:text-white">List Terumbu Karang</a></li>
		<li><a href="#" class="hover:text-white">Kehidupan Pesisir</a></li>
		</ul>
		</div>
		<div>
		<h6 class="font-bold text-white mb-3">Kontak</h6>
		<ul class="text-sm text-gray-400 space-y-2">
		<li>Email: info@3dterka.com</li>
		<li>Instagram: @3dterka</li>
		</ul>
		</div>
		</div>


		<div class="text-center text-gray-500 text-sm mt-10 border-t border-gray-700 pt-6">
		© 2026 Website 3D Terka. All Rights Reserved.
		</div>
		</footer>
		-->

	</div>

	{{-- CSS Tambahan (Inline untuk contoh, sebaiknya pindahkan ke file CSS terpisah) --}}
	<style>
		.hover-up {
			transition: transform 0.3s ease;
		}

		.hover-up:hover {
			transform: translateY(-5px);
		}

		.hover-white:hover {
			color: white !important;
		}

		/* Animasi panah hero */
		@keyframes bounce {

			0%,
			20%,
			50%,
			80%,
			100% {
				transform: translateY(0);
			}

			40% {
				transform: translateY(-10px);
			}

			60% {
				transform: translateY(-5px);
			}
		}

		.animate-bounce {
			animation: bounce 2s infinite;
		}
	</style>
@endsection

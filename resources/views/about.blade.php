@extends('layouts.display')

@section('title', 'Tentang Kami - Rumah Coral Bali')

@section('content')
	<div class="about-page">

		{{-- 1. HERO SECTION --}}
		<section class="relative flex items-center justify-center min-h-[60vh] text-white bg-cover bg-center -mt-[70px]"
		style="background-image: linear-gradient(rgba(0,50,60,.6), rgba(0,30,40,.8)), url('{{ asset('images/about/intro.png') }}')">
		<div class="text-center pt-10 px-4">
		<h1 class="text-4xl md:text-5xl font-extrabold uppercase tracking-widest mb-3">Rumah Coral Bali</h1>
		<p class="text-xl mb-4">Help Save Coral Reefs</p>
		<div class="inline-block border-y border-white py-2 px-4">
		<span class="text-sm font-bold uppercase">Est. 7 Juni 2022</span>
		</div>
		</div>
		</section>

		{{-- 2. INTRODUCTION --}}
		<section class="py-16">
		<div class="max-w-6xl mx-auto px-6">
		<h6 class="text-sky-400 font-bold uppercase mb-2">Siapa Kami?</h6>
		<h2 class="text-3xl font-bold mb-6 text-white">About Rumah Coral Bali</h2>
		<p class="text-white text-lg text-justify mb-4">
		Rumah Coral merupakan suatu komunitas yang berdiri pada tanggal <strong>7 Juni 2022</strong> dan bergerak di
		bidang kelautan.
		</p>
		<p class="text-white text-justify">
		Tujuan didirikannya komunitas ini didasarkan oleh keinginan untuk mengurangi dampak perubahan iklim melalui
		penanaman terumbu karang dan menjaga kelestarian laut melalui <em>underwater clean up</em>.
		</p>
		</div>
		</section>

		{{-- 3. VISI & MISI --}}
		<section class="py-16 text-white bg-gradient-to-br from-[#0d161a] to-[#1a2e38]">
		<div class="max-w-6xl mx-auto px-6">
		<div class="text-center mb-12">
		<h2 class="text-3xl font-bold border-b inline-block pb-2">Visi</h2>
		<p class="italic text-lg mt-6 max-w-4xl mx-auto">
		"Menjadi pelindung dan pemelihara terumbu karang yang berkelanjutan..."
		</p>
		</div>


		<div class="max-w-4xl mx-auto bg-[#101d22] text-gray-800 p-8 rounded-xl shadow">
		<h3 class="text-2xl font-bold text-center text-white mb-6">Misi Kami</h3>
		<ul class="space-y-3 text-white">
		<li>✔ Melakukan penanaman terumbu karang secara terencana</li>
		<li>✔ Edukasi dan kampanye kesadaran masyarakat</li>
		<li>✔ Melibatkan komunitas lokal</li>
		<li>✔ Kerjasama dengan pemerintah</li>
		<li>✔ Pengembangan teknologi konservasi</li>
		</ul>
		</div>
		</div>
		</section>

		{{-- 4. PROBLEMS --}}
		<section class="py-16">
		<div class="max-w-7xl mx-auto px-6">
		<div class="text-center mb-10">
		<h2 class="text-4xl font-bold text-white">PROBLEMS</h2>
		<p class="text-white">Tantangan utama ekosistem laut</p>
		</div>


		<div class="grid md:grid-cols-3 gap-6">
		{{-- Card --}}
		<div class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] shadow rounded-xl overflow-hidden">
		<img src="{{ asset('images/about/climate.png') }}" class="h-52 w-full object-cover">
		<div class="p-5 text-center">
		<span class="bg-red-500 text-white text-xs px-2 py-1 rounded">Urgent</span>
		<h5 class="font-bold mt-2 text-white">Climate Change</h5>
		<p class="text-sm text-white">Pemutihan karang akibat suhu laut.</p>
		</div>
		</div>


		<div class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] shadow rounded-xl overflow-hidden">
		<img src="{{ asset('images/about/degradation.png') }}" class="h-52 w-full object-cover">
		<div class="p-5 text-center">
		<span class="bg-yellow-400 text-black text-xs px-2 py-1 rounded">Critical</span>
		<h5 class="font-bold mt-2 text-white">Habitat Degradation</h5>
		<p class="text-sm text-white">Kerusakan fisik akibat manusia.</p>
		</div>
		</div>


		<div class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] shadow rounded-xl overflow-hidden">
		<img src="{{ asset('images/about/pollution.png') }}" class="h-52 w-full object-cover">
		<div class="p-5 text-center">
		<span class="bg-gray-800 text-white text-xs px-2 py-1 rounded">Action Needed</span>
		<h5 class="font-bold mt-2 text-white">Unsustainable Tourism</h5>
		<p class="text-sm text-white">Sampah plastik & wisata massal.</p>
		</div>
		</div>
		</div>
		</div>
		</section>

		{{-- 5. SOLUTION --}}
		<section class="py-16 bg-gradient-to-br from-[#0d161a] to-[#1a2e38]">
		<div class="max-w-6xl mx-auto px-6">
		<h2 class="text-center text-3xl font-bold text-white mb-12">OUR SOLUTION</h2>


		<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16">
		@foreach (['EDUCATION','TRANSPLANTATION','MONITORING','RESEARCH DATA'] as $i => $item)
		<div class="bg-[#101d22] p-6 rounded shadow border-b-4 border-sky-400 text-center text-white">
		<h1 class="text-3xl font-bold text-sky-400 text">{{ $i+1 }}</h1>
		<h6 class="font-bold">{{ $item }}</h6>
		</div>
		@endforeach
		</div>


		<div class="grid md:grid-cols-2 gap-10 items-center">
		<img src="{{ asset('images/about/hexagonal.png') }}" class="rounded-xl shadow">
		<div>
		<h2 class="text-2xl font-bold text-sky-400 mb-4">Metode Hexagonal</h2>
		<p class="text-white text-justify mb-3">
		Metode transplantasi inovatif untuk restorasi terumbu karang.
		</p>
		<p class="text-white text-justify">
		Struktur baja anti karat untuk menopang pertumbuhan karang.
		</p>
		</div>
		</div>
		</div>
		</section>


		{{-- 6. FILOSOFI LOGO --}}
		<section class="py-16">
		<div class="max-w-6xl mx-auto px-6">
		<div class="grid md:grid-cols-2 gap-10 items-center border-b pb-12">
		<img src="{{ asset('images/about/filosofi-logo.png') }}" class="max-h-[300px] mx-auto">
		<div>
		<h3 class="text-2xl font-bold text-sky-400 mb-4">Filosofi Logo</h3>
		<div class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] p-6 rounded border-l-4 border-sky-400">
		<p class="text-white text-justify">
		Logo Rumah Coral melambangkan rumah sebagai pelindung biota laut dan karang sebagai fondasi ekosistem.
		</p>
		</div>
		</div>
		</div>


		<div class="text-center mt-12">
		<h2 class="text-3xl font-bold mb-4 text-white">OUR SITE</h2>
		<p class="text-white mb-6">Lokasi konservasi Bali & Nusa Penida</p>
		<img src="{{ asset('images/about/peta-bali.png') }}" class="rounded-xl shadow mx-auto">
		</div>
		</div>
		</section>

	</div>
@endsection

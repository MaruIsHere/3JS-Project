@extends('layouts.display')

@section('title', 'Mitra Ilmiah - The Smithsonian Institution | Rumah Coral Bali')

@section('content')
	<div class="smithsonian-page">

		{{-- HERO SECTION --}}
		<section class="relative flex items-center justify-center min-h-[60vh] text-white bg-cover bg-center -mt-[70px]"
		style="background-image: url('{{ asset('images/partners/smithsonian-hero.jpg') }}')">
		<div class="text-center pt-10 px-4">
		<h1 class="text-4xl md:text-5xl font-extrabold uppercase tracking-widest mb-3">
		The Smithsonian Institution
		</h1>
		<p class="text-xl mb-4">A Global Beacon of Marine Science & Conservation</p>
		<div class="inline-block border-y border-white py-2 px-4">
		<span class="text-sm font-bold uppercase">Scientific Partner & Inspiration</span>
		</div>
		</div>
		</section>

		{{-- INTRODUCTION --}}
		<section class="py-16 bg-gradient-to-br from-[#0d161a] to-[#1a2e38]">
		<div class="max-w-6xl mx-auto px-6">
		<h6 class="text-sky-400 font-bold uppercase mb-2">Our Scientific Inspiration</h6>
		<h2 class="text-3xl font-bold mb-6 text-white">Honoring The Smithsonian Institution</h2>
		<p class="text-white text-lg text-justify mb-4">
		Rumah Coral Bali menyampaikan penghargaan setinggi-tingginya kepada
		<strong>The Smithsonian Institution</strong> — salah satu lembaga riset kelautan dan konservasi terkemuka di dunia —
		atas dedikasinya dalam memajukan pemahaman ilmiah tentang terumbu karang, perubahan iklim, dan keanekaragaman hayati laut.
		</p>
		<p class="text-white text-justify">
		Penelitian, metodologi transplantasi, dan pendekatan berbasis data dari Smithsonian Marine Station dan
		Smithsonian’s National Museum of Natural History telah menjadi inspirasi utama dalam merancang program restorasi kami.
		</p>
		</div>
		</section>

		{{-- SMITHSONIAN CONTRIBUTION --}}
		<section class="py-16 text-white">
		<div class="max-w-6xl mx-auto px-6">
		<div class="text-center mb-12">
		<h2 class="text-3xl font-bold border-b inline-block pb-2">Why We Honor Them</h2>
		<p class="italic text-lg mt-6 max-w-4xl mx-auto">
		“Their open science, global coral monitoring networks, and commitment to community-based restoration embody the spirit we strive to emulate.”
		</p>
		</div>


		<div class="max-w-4xl mx-auto bg-gradient-to-br from-[#0d161a] to-[#1a2e38] text-gray-800 p-8 rounded-xl shadow">
		<h3 class="text-2xl font-bold text-center text-white mb-6">Key Contributions That Inspire Us</h3>
		<ul class="space-y-3 text-white">
		<li>✔ Pengembangan metode <strong>coral gardening</strong> dan fragmentasi karang yang scalable</li>
		<li>✔ Inisiatif <strong>Reef Rescue</strong> dan bank genetik karang spesies terancam</li>
		<li>✔ Publikasi data terbuka melalui <strong>Smithsonian Ocean Portal</strong></li>
		<li>✔ Kolaborasi global dalam mitigasi pemanasan laut</li>
		</ul>
		</div>
		</div>
		</section>


		{{-- CLOSING MESSAGE --}}
		<section class="py-16 bg-[#101d22]">
		<div class="max-w-4xl mx-auto px-6 text-center">
		<blockquote class="italic text-xl text-white mb-4">
		“Science is not just for scientists—it belongs to everyone who cares for the ocean.”
		</blockquote>
		<p class="text-sm text-white mb-8">
		— Inspired by the ethos of <span class="font-semibold">The Smithsonian Institution</span>
		</p>
		<a href="https://ocean.si.edu" target="_blank"
		class="inline-block border border-white text-white px-6 py-2 rounded hover:bg-gradient-to-br from-[#0d161a] to-[#1a2e38] hover:text-white transition">
		Visit Smithsonian Ocean Portal
		</a>
		</div>
		</section>

	</div>
@endsection

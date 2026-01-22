@extends('layouts.display')

@section('title', 'Mitra Ilmiah - The Smithsonian Institution | Rumah Coral Bali')

@section('content')
	<div class="smithsonian-page">

		{{-- HERO SECTION --}}
		<section class="position-relative text-white d-flex align-items-center justify-content-center"
			style="min-height: 60vh; 
               background: linear-gradient(rgba(0, 40, 60, 0.7), rgba(0, 20, 30, 0.9)), url('{{ asset('images/partners/smithsonian-hero.jpg') }}'); 
               background-size: cover; background-position: center; margin-top: -70px;">
			<div class="container text-center pt-5">
				<h1 class="display-3 fw-bold mb-3 text-uppercase" style="letter-spacing: 2px;">The Smithsonian Institution</h1>
				<p class="lead fs-4 mb-4">A Global Beacon of Marine Science & Conservation</p>
				<div class="d-inline-block border-top border-bottom border-light py-2 px-4">
					<span class="text-uppercase small fw-bold">Scientific Partner & Inspiration</span>
				</div>
			</div>
		</section>

		{{-- INTRODUCTION --}}
		<section class="py-5 bg-light">
			<div class="container py-4">
				<div class="row align-items-center g-5">
					<div class="col-lg-12">
						<h6 class="text-primary fw-bold text-uppercase mb-2">Our Scientific Inspiration</h6>
						<h2 class="fw-bold mb-4">Honoring The Smithsonian Institution</h2>
						<p class="text-muted lead" style="text-align: justify;">
							Rumah Coral Bali menyampaikan penghargaan setinggi-tingginya kepada <strong>The Smithsonian
								Institution</strong>—salah satu lembaga riset kelautan dan konservasi terkemuka di dunia—atas dedikasinya dalam
							memajukan pemahaman ilmiah tentang terumbu karang, perubahan iklim, dan keanekaragaman hayati laut.
						</p>
						<p class="text-muted" style="text-align: justify;">
							Penelitian, metodologi transplantasi, dan pendekatan berbasis data dari Smithsonian Marine Station dan
							Smithsonian’s National Museum of Natural History telah menjadi sumber inspirasi utama dalam merancang program
							restorasi kami di perairan Bali dan Nusa Penida.
						</p>
					</div>
				</div>
			</div>
		</section>

		{{-- SMITHSONIAN'S CONTRIBUTION --}}
		<section class="py-5 text-white" style="background-color: #347474;">
			<div class="container py-4">
				<div class="row g-5">
					<div class="col-lg-10 mx-auto text-center">
						<h2 class="fw-bold mb-4 border-bottom d-inline-block pb-2">Why We Honor Them</h2>
						<p class="fs-5 fw-light fst-italic mx-auto" style="max-width: 900px;">
							“Their open science, global coral monitoring networks, and commitment to community-based restoration embody the
							spirit we strive to emulate.”
						</p>
					</div>

					<div class="col-lg-10 mx-auto mt-5">
						<div class="bg-white text-dark p-4 p-md-5 rounded-3 shadow">
							<h3 class="fw-bold text-center mb-4" style="color: #347474;">Key Contributions That Inspire Us</h3>
							<ul class="list-group list-group-flush lead fs-6">
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Pengembangan
									metode <strong>coral gardening</strong> dan fragmentasi karang yang scalable.</li>
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Inisiatif
									<strong>“Reef Rescue”</strong> dan bank genetik karang untuk spesies terancam.
								</li>
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Publikasi
									data terbuka melalui platform seperti <strong>Smithsonian Ocean Portal</strong>.</li>
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Kolaborasi
									lintas negara dalam mitigasi dampak pemanasan laut.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>



		{{-- CLOSING MESSAGE --}}
		<section class="py-5 bg-light">
			<div class="container text-center py-4">
				<blockquote class="blockquote text-center">
					<p class="mb-0 fs-4 fst-italic">“Science is not just for scientists—it belongs to everyone who cares for the ocean.”
					</p>
					<footer class="blockquote-footer mt-2">— Inspired by the ethos of <cite title="The Smithsonian Institution">The
							Smithsonian Institution</cite></footer>
				</blockquote>
				<div class="mt-5">
					<a href="https://ocean.si.edu" target="_blank" class="btn btn-outline-primary px-4 py-2">
						<i class="bi bi-globe me-2"></i>Visit Smithsonian Ocean Portal
					</a>
				</div>
			</div>
		</section>

	</div>
@endsection

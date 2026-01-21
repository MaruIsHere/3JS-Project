@extends('layouts.display')

@section('title', 'Beranda - Website 3D Terka')

@section('content')
	<div class="home-page">

		{{-- 1. HERO SECTION --}}
		<section class="hero-section position-relative text-white d-flex align-items-center justify-content-center"
			style="min-height: 90vh; 
                   background: linear-gradient(rgba(0, 30, 60, 0.5), rgba(0, 20, 40, 0.7)), url('{{ asset('images/beranda.jpg') }}'); 
                   background-size: cover; 
                   background-position: center;
                   margin-top: -70px; /* Asumsi navbar transparan */">

			<div class="container text-center position-relative z-2">
				<h1 class="display-4 fw-bolder mb-3 text-uppercase"
					style="letter-spacing: 1px; text-shadow: 0 4px 15px rgba(0,0,0,0.5);">
					Jelajahi Keajaiban Bawah Laut <br> Secara Digital
				</h1>
				<p class="lead fs-5 mb-5 mx-auto text-light opacity-75" style="max-width: 700px;">
					Dokumentasi terumbu karang interaktif pertama dengan teknologi pemodelan 3D presisi tinggi.
				</p>
				<div class="d-flex justify-content-center gap-3">
					<a href="{{ route('data.index') }}" class="btn btn-primary btn-lg px-4 py-2 rounded-1 fw-bold border-0"
						style="background-color: #2563eb;">Mulai Menjelajah</a>
					<a href="/about" class="btn btn-outline-light btn-lg px-4 py-2 rounded-1 fw-bold">Pelajari Proyek</a>
				</div>
			</div>

			{{-- Panah Scroll Down --}}
			<div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 animate-bounce">
				<i class="bi bi-chevron-down fs-2"></i>
			</div>
		</section>

		{{-- 2. FEATURES SECTION --}}
		<section class="py-5 bg-white">
			<div class="container py-5">
				<div class="text-center mb-5">
					<h3 class="fw-bold text-dark">Mengapa Belajar Bersama Kami?</h3>
				</div>
				<div class="row g-4">
					{{-- Feature 1 --}}
					<div class="col-md-4">
						<div class="card h-100 border-0 shadow-sm rounded-4 p-3 text-center hover-up">
							<div class="card-body">
								<div class="mb-3">
									{{-- Ikon Coral (Menggunakan Bootstrap Icon water sebagai pengganti) --}}
									<i class="bi bi-water text-primary fs-1"></i>
								</div>
								<h5 class="fw-bold mb-2">Visual Realistik</h5>
								<p class="text-muted small">Tekstur & bentuk asli dari laut Indonesia.</p>
							</div>
						</div>
					</div>
					{{-- Feature 2 --}}
					<div class="col-md-4">
						<div class="card h-100 border-0 shadow-sm rounded-4 p-3 text-center hover-up">
							<div class="card-body">
								<div class="mb-3">
									<i class="bi bi-book text-success fs-1"></i>
								</div>
								<h5 class="fw-bold mb-2">Edukasi Digital</h5>
								<p class="text-muted small">Media belajar nyata tanpa harus menyelam.</p>
							</div>
						</div>
					</div>
					{{-- Feature 3 --}}
					<div class="col-md-4">
						<div class="card h-100 border-0 shadow-sm rounded-4 p-3 text-center hover-up">
							<div class="card-body">
								<div class="mb-3">
									<i class="bi bi-clock-history text-warning fs-1"></i>
								</div>
								<h5 class="fw-bold mb-2">Akses 24/7</h5>
								<p class="text-muted small">Informasi detail kapan saja.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		{{-- 3. COLLECTION & INFO SECTION (Sesuai Layout Gambar) --}}
		<section class="py-5 bg-light">
			<div class="container py-4">
				<div class="text-center mb-5">
					<h3 class="fw-bold">Koleksi Spesimen Terbatas</h3>
				</div>

				<div class="row g-4">
					{{-- Kartu Spesimen 1 --}}
					<div class="col-lg-3 col-md-6">
						<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
							{{-- Placeholder Background Hitam untuk 3D --}}
							<div class="bg-dark d-flex align-items-center justify-content-center" style="height: 200px;">
								<img src="{{ asset('images/coral-1.png') }}" alt="Coral 1" class="img-fluid"
									style="max-height: 150px; opacity: 0.8;">
							</div>
							<div class="card-body text-center bg-white">
								<h6 class="fw-bold text-dark">"Pocillopora damicornis"</h6>
								<a href="#" class="btn btn-primary btn-sm px-4 mt-2 rounded-pill">Lihat 3D</a>
							</div>
						</div>
					</div>

					{{-- Kartu Spesimen 2 --}}
					<div class="col-lg-3 col-md-6">
						<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
							<div class="bg-dark d-flex align-items-center justify-content-center" style="height: 200px;">
								<img src="{{ asset('images/coral-2.png') }}" alt="Coral 2" class="img-fluid"
									style="max-height: 150px; opacity: 0.8;">
							</div>
							<div class="card-body text-center bg-white">
								<h6 class="fw-bold text-dark">"Acropora Formosa"</h6>
								<a href="#" class="btn btn-primary btn-sm px-4 mt-2 rounded-pill">Lihat 3D</a>
							</div>
						</div>
					</div>

					{{-- Kartu Spesimen 3 --}}
					<div class="col-lg-3 col-md-6">
						<div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
							<div class="bg-dark d-flex align-items-center justify-content-center" style="height: 200px;">
								<img src="{{ asset('images/coral-3.png') }}" alt="Coral 3" class="img-fluid"
									style="max-height: 150px; opacity: 0.8;">
							</div>
							<div class="card-body text-center bg-white">
								<h6 class="fw-bold text-dark">"Porites Lutea"</h6>
								<a href="#" class="btn btn-primary btn-sm px-4 mt-2 rounded-pill">Lihat 3D</a>
							</div>
						</div>
					</div>

					{{-- Kolom Teks Informasi (Posisi Kanan) --}}
					<div class="col-lg-3 col-md-6 d-flex flex-column justify-content-center ps-lg-4">
						<h4 class="fw-bold mb-3">Penganiman Interaktif 3D</h4>
						<p class="text-muted small mb-4">Ragam spesies model spesimen terumbu karang Indonesia.</p>

						<ul class="list-unstyled mb-4 small text-secondary">
							<li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Zoom Detail Polip</li>
							<li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Informasi Taksonomi</li>
						</ul>

						<a href="{{ route('data.index') }}" class="btn btn-primary w-100 fw-bold">LIHAT DAFTAR KARANG</a>
					</div>
				</div>
			</div>
		</section>

		{{-- 4. FOOTER CTA --}}
		<section class="py-5 text-center text-white" style="background-color: #0f172a;">
			<div class="container py-4">
				<h3 class="fw-bold mb-3">Bantu Kami Melestarikan <br> Lautan Melalui Pengetahuan</h3>
				<p class="mb-5 opacity-75">Punya pertanyaan atau ingin berkolaborasi?</p>
				<a href="mailto:info@website3dterka.com" class="btn btn-light text-primary fw-bold btn-lg px-5 shadow">HUBUNGI
					KAMI</a>
			</div>
		</section>

		{{-- 5. FOOTER LINKS (Navigasi Bawah) --}}
		<footer class="bg-dark text-white py-5 pt-5 border-top border-secondary">
			<div class="container">
				<div class="row g-4">
					<div class="col-md-4">
						<h5 class="fw-bold mb-3"><i class="bi bi-box-seam me-2"></i>Website 3D Terka</h5>
						<p class="small text-muted">Aplikasi visualisasi untuk pelestarian terumbu karang Indonesia.</p>
					</div>
					<div class="col-md-2">
						<h6 class="fw-bold mb-3">Navigasi</h6>
						<ul class="list-unstyled small text-muted">
							<li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-white">List Terumbu
									Karang</a></li>
							<li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-white">Kehidupan Pesisir</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h6 class="fw-bold mb-3">Kontak</h6>
						<ul class="list-unstyled small text-muted">
							<li class="mb-2">Email: info@3dterka.com</li>
							<li class="mb-2">Instagram: @3dterka</li>
						</ul>
					</div>
				</div>
				<div class="text-center pt-4 mt-4 border-top border-secondary small text-muted">
					© 2026 Website 3D Terka. All Rights Reserved.
				</div>
			</div>
		</footer>

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

@extends('layouts.display')

@section('title', 'Beranda - Digital Coral Archive')

@section('content')
	<div class="home-page">

		{{-- Menggunakan min-vh-80 (80% tinggi layar) agar responsif --}}
		<section class="hero-section position-relative text-white d-flex align-items-center"
			style="min-height: 80vh; 
                   background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('{{ asset('images/beranda.jpg') }}'); 
                   background-size: cover; 
                   background-position: center; 
                   margin-top: -70px;">
			<div class="container text-center">
				<h1 class="display-3 fw-bold mb-3" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">
					Jelajahi Dunia Bawah Laut Secara Digital
				</h1>
				<p class="lead fs-4 mb-5 mx-auto" style="max-width: 800px;">
					Dokumentasi terumbu karang interaktif pertama dengan teknologi pemodelan 3D presisi tinggi.
				</p>
				<div class="d-flex justify-content-center gap-3">
					<a href="{{ route('data.index') }}" class="btn btn-primary btn-lg px-5 shadow-lg">Mulai Menjelajah</a>
					<a href="/about" class="btn btn-outline-light btn-lg px-5 shadow-lg">Pelajari Proyek</a>
				</div>
			</div>
		</section>

		<section class="py-5 bg-white">
			<div class="container py-5">
				<div class="row g-4 text-center">
					<div class="col-md-4">
						<div class="card h-100 border-0 p-4 shadow-sm">
							<div class="card-body">
								<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
									class="text-primary mb-3" viewBox="0 0 16 16">
									<path
										d="M7.765 1.559a.5.5 0 0 1 .47 0l6 3a.5.5 0 0 1 0 .882l-6 3a.5.5 0 0 1-.47 0l-6-3a.5.5 0 0 1 0-.882l6-3zM1.5 5.25l5.5 2.75 5.5-2.75-5.5-2.75-5.5 2.75z" />
									<path d="M1.5 8.25l5.5 2.75 5.5-2.75-5.5-2.75-5.5 2.75z" />
									<path d="M1.5 11.25l5.5 2.75 5.5-2.75-5.5-2.75-5.5 2.75z" />
								</svg>
								<h4 class="fw-bold">Visual Realistik</h4>
								<p class="text-muted small">Tekstur dan bentuk karang yang diambil langsung dari spesimen laut asli Indonesia.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card h-100 border-0 p-4 shadow-sm bg-light">
							<div class="card-body">
								<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
									class="text-success mb-3" viewBox="0 0 16 16">
									<path
										d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z" />
									<path
										d="M4.5 9a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
								</svg>
								<h4 class="fw-bold">Edukasi Digital</h4>
								<p class="text-muted small">Memudahkan peneliti dan siswa belajar tanpa harus menyelam ke dasar laut.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card h-100 border-0 p-4 shadow-sm">
							<div class="card-body">
								<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
									class="text-warning mb-3" viewBox="0 0 16 16">
									<path
										d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
								</svg>
								<h4 class="fw-bold">Akses 24/7</h4>
								<p class="text-muted small">Dapatkan informasi detail mengenai terumbu karang kapan saja melalui perangkat Anda.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="py-5 bg-light border-top border-bottom">
			<div class="container py-4">
				<div class="row align-items-center">
					<div class="col-lg-6 mb-4 mb-lg-0 text-center">
						<img src="{{ asset('storage/images/beranda.jpg') }}" alt="3D Preview" class="img-fluid rounded-4 shadow"
							style="max-height: 400px; width: 100%; object-fit: cover;">
					</div>
					<div class="col-lg-6 ps-lg-5">
						<h2 class="fw-bold mb-4">Pengalaman Interaktif 3D</h2>
						<p class="text-muted mb-4 fs-5">
							Setiap spesimen dalam arsip kami diproses menggunakan teknologi fotogrametri dan pemodelan 3D yang memungkinkan
							Anda untuk menjelajahi keajaiban laut tanpa merusak ekosistem.
						</p>
						<ul class="list-unstyled mb-4">
							<li class="mb-3 d-flex align-items-center">
								<svg class="text-primary me-3" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
									<path
										d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7z" />
								</svg>
								<span>Rotasi 360 derajat untuk melihat setiap sudut.</span>
							</li>
							<li class="mb-3 d-flex align-items-center">
								<svg class="text-primary me-3" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
									<path
										d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7z" />
								</svg>
								<span>Zoom in untuk melihat detail struktur polip.</span>
							</li>
						</ul>
						<a href="{{ route('data.index') }}" class="btn btn-outline-primary px-4 btn-lg shadow-sm">Lihat Daftar Karang</a>
					</div>
				</div>
			</div>
		</section>

		<section class="py-5 text-center bg-dark text-white">
			<div class="container py-5">
				<h2 class="fw-bold mb-4">Bantu Kami Melestarikan Lautan Melalui Pengetahuan</h2>
				<p class="mb-5 opacity-75 fs-5">Koleksi kami terus bertambah. Bergabunglah dalam perjalanan dokumentasi ini.</p>
				<a href="mailto:info@website3dterka.com" class="btn btn-primary btn-lg px-5 shadow">Hubungi Kami</a>
			</div>
		</section>

	</div>
@endsection

@extends('layouts.display')

@section('title', 'Tentang Kami - Digital Coral Archive')

@section('content')
	<div class="about-page">

		<section class="bg-primary text-white py-5 mb-5"
			style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/terumbu karang.avif') }}'); background-size: cover; background-position: center;">
			<div class="container py-5 text-center">
				<h1 class="display-4 fw-bold animate__animated animate__fadeInDown">Tentang Kami</h1>
				<p class="lead animate__animated animate__fadeInUp">Membawa ekosistem bawah laut ke ujung jari Anda melalui teknologi
					3D.</p>
			</div>
		</section>

		<div class="container mb-5">
			<div class="row align-items-center mb-5">
				<div class="col-lg-6">
					<h2 class="fw-bold mb-4 text-primary">Visi Digital Coral Archive</h2>
					<p class="text-muted">
						<strong>Digital Coral Archive</strong> adalah sebuah inisiatif inovatif yang menggabungkan biologi kelautan dengan
						teknologi komputer grafis tingkat tinggi. Kami percaya bahwa visualisasi adalah kunci utama dalam edukasi
						pelestarian lingkungan.
					</p>
					<p class="text-muted">
						Melalui penggunaan <strong>Three.js</strong> dan pemodelan 3D yang akurat, kami mencoba mendokumentasikan berbagai
						spesies karang seperti <em>Pocillopora</em>, <em>Porites</em>, dan <em>Pseudodiploria</em> agar dapat dipelajari
						oleh siapa saja, kapan saja, tanpa harus merusak habitat aslinya.
					</p>
				</div>
				<div class="col-lg-6">
					<div class="p-2 shadow rounded bg-white border">
						<img src="https://images.unsplash.com/photo-1582967788606-a171c1080cb0?auto=format&fit=crop&w=800&q=80"
							alt="Coral Conservation" class="img-fluid rounded">
					</div>
				</div>
			</div>

			<div class="row g-4 mb-5">

				<div class="col-md-4">
					<div class="card h-100 border-0 shadow-sm text-center p-4">
						<div class="mb-3">
							<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="text-primary"
								viewBox="0 0 16 16">
								<path
									d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.744V6.852L1 4.25v7.894l6.5 2.6z" />
							</svg>
						</div>
						<h5 class="card-title fw-bold">Interaktivitas</h5>
						<p class="card-text text-muted small">Putar, perbesar, dan amati struktur polip karang secara detail langsung dari
							browser Anda.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card h-100 border-0 shadow-sm text-center p-4">
						<div class="mb-3 text-success">
							<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" viewBox="0 0 16 16">
								<path
									d="M14.763.075A.5.5 0 0 1 15 .5V15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V12.728c-1.234.24-2.5.312-3.722.213C5.916 12.822 4.606 12.42 3.5 11.5c-1.125-.935-1.75-2.25-1.75-3.5a4.5 4.5 0 0 1 1.03-2.887A4.485 4.485 0 0 1 5 3.5c.34 0 .67.043 1 .126V.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v2.45c1.233-.242 2.5-.314 3.722-.215 1.362.11 2.672.512 3.778 1.433a.5.5 0 0 1 .014.758c-.11.092-.25.138-.403.138H14.763zM10 3.826a11.53 11.53 0 0 0-2 .142V1.5h-2v2.664c-.312-.062-.625-.104-.943-.122A3.5 3.5 0 0 0 2.75 8c0 1.012.49 2.052 1.416 2.82.886.736 1.954 1.077 3.084 1.169.318.026.637.026.95-.01V14.5h2v-2.078c.702-.084 1.378-.235 2-.45V3.826z" />
							</svg>
						</div>
						<h5 class="card-title fw-bold">Edukasi & Konservasi</h5>
						<p class="card-text text-muted small">Media edukasi tanpa kontak fisik untuk melindungi habitat asli karang yang
							sangat sensitif.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card h-100 border-0 shadow-sm text-center p-4">
						<div class="mb-3 text-info">
							<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" viewBox="0 0 16 16">
								<path
									d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
							</svg>
						</div>
						<h5 class="card-title fw-bold">Teknologi Terkini</h5>
						<p class="card-text text-muted small">Performa render 3D yang cepat dan responsif berkat optimasi Three.js dan
							WebGL.</p>
					</div>
				</div>

			</div>

			<div class="bg-light p-5 rounded text-center border shadow-sm">
				<h3 class="fw-bold mb-3">Siap Menjelajahi Koleksi Kami?</h3>
				<p class="mb-4 text-muted">Pelajari struktur unik berbagai jenis terumbu karang Indonesia secara interaktif.</p>
				<a href="{{ route('data.index') }}" class="btn btn-primary btn-lg px-5 shadow">Lihat Koleksi 3D</a>
			</div>
		</div>
	</div>
@endsection

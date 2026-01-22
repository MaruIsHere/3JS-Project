@extends('layouts.display')

@section('title', 'Tentang Kami - Rumah Coral Bali')

@section('content')
	<div class="about-page">

		{{-- 1. HERO SECTION --}}
		<section class="position-relative text-white d-flex align-items-center justify-content-center"
			style="min-height: 60vh; 
                   background: linear-gradient(rgba(0, 50, 60, 0.6), rgba(0, 30, 40, 0.8)), url('{{ asset('images/about/intro.png') }}'); 
                   background-size: cover; background-position: center; margin-top: -70px;">
			<div class="container text-center pt-5">
				<h1 class="display-3 fw-bold mb-3 text-uppercase" style="letter-spacing: 2px;">Rumah Coral Bali</h1>
				<p class="lead fs-4 mb-4">Help Save Coral Reefs</p>
				<div class="d-inline-block border-top border-bottom border-light py-2 px-4">
					<span class="text-uppercase small fw-bold">Est. 7 Juni 2022</span>
				</div>
			</div>
		</section>

		{{-- 2. INTRODUCTION (SEJARAH) --}}
		<section class="py-5 bg-light">
			<div class="container py-4">
				<div class="row align-items-center g-5">
					<div class="col-lg-12 order-lg-1">
						<h6 class="text-primary fw-bold text-uppercase mb-2">Siapa Kami?</h6>
						<h2 class="fw-bold mb-4">About Rumah Coral Bali</h2>
						<p class="text-muted lead" style="text-align: justify;">
							Rumah Coral merupakan suatu komunitas yang berdiri pada tanggal <strong>7 Juni 2022</strong> dan bergerak di
							bidang kelautan.
						</p>
						<p class="text-muted" style="text-align: justify;">
							Tujuan didirikannya komunitas ini didasarkan oleh keinginan untuk mengurangi dampak perubahan iklim melalui
							penanaman terumbu karang dan menjaga kelestarian laut melalui <em>underwater clean up</em>. Kami percaya langkah
							kecil bersama dapat membawa perubahan besar bagi ekosistem laut.
						</p>
					</div>
				</div>
			</div>
		</section>

		{{-- 3. VISI & MISI (Style Kotak Hijau Teal) --}}
		<section class="py-5 text-white" style="background-color: #347474;">
			<div class="container py-4">
				<div class="row g-5">
					{{-- Visi --}}
					<div class="col-lg-12 text-center mb-4">
						<h2 class="fw-bold mb-4 border-bottom d-inline-block pb-2">Visi</h2>
						<p class="fs-5 fw-light fst-italic mx-auto" style="max-width: 900px;">
							"Menjadi pelindung dan pemelihara terumbu karang yang berkelanjutan, memberikan kehidupan laut yang sehat, serta
							mendorong kesadaran dan partisipasi masyarakat dalam melestarikan keberagaman ekosistem laut."
						</p>
					</div>

					{{-- Misi --}}
					<div class="col-lg-10 mx-auto">
						<div class="bg-white text-dark p-4 p-md-5 rounded-3 shadow">
							<h3 class="fw-bold text-center mb-4" style="color: #347474;">Misi Kami</h3>
							<ul class="list-group list-group-flush lead fs-6">
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Melakukan
									penanaman terumbu karang secara terencana untuk memulihkan ekosistem.</li>
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Edukasi dan
									kampanye meningkatkan kesadaran masyarakat.</li>
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Melibatkan
									komunitas lokal dalam pemantauan dan pelestarian.</li>
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Kerjasama
									dengan pemerintah & lembaga terkait untuk kebijakan perlindungan.</li>
								<li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Meneliti dan
									mengembangkan teknologi inovatif konservasi.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		{{-- 4. PROBLEMS (Permasalahan) --}}
		<section class="py-5 bg-white">
			<div class="container py-4">
				<div class="text-center mb-5">
					<h2 class="fw-bold display-5">PROBLEMS</h2>
					<p class="text-muted">Tantangan utama yang dihadapi ekosistem laut kita saat ini.</p>
				</div>
				<div class="row g-4 text-center">
					<div class="col-md-4">
						<div class="card h-100 border-0 shadow-sm">
							<img src="{{ asset('images/about/climate.png') }}" class="card-img-top" alt="Climate Change"
								style="height: 200px; object-fit: cover;">
							<div class="card-body">
								<span class="badge bg-danger mb-2">Urgent</span>
								<h5 class="fw-bold">Climate Change</h5>
								<p class="small text-muted">Pemanasan suhu laut yang memicu pemutihan karang (bleaching).</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card h-100 border-0 shadow-sm">
							<img src="{{ asset('images/about/degradation.png') }}" class="card-img-top" alt="Habitat Degradation"
								style="height: 200px; object-fit: cover;">
							<div class="card-body">
								<span class="badge bg-warning text-dark mb-2">Critical</span>
								<h5 class="fw-bold">Habitat Degradation</h5>
								<p class="small text-muted">Kerusakan fisik akibat aktivitas manusia yang merusak struktur karang.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card h-100 border-0 shadow-sm">
							<img src="{{ asset('images/about/pollution.png') }}" class="card-img-top" alt="Unsustainable Tourism"
								style="height: 200px; object-fit: cover;">
							<div class="card-body">
								<span class="badge bg-dark mb-2">Action Needed</span>
								<h5 class="fw-bold">Unsustainable Tourism</h5>
								<p class="small text-muted">Pencemaran sampah plastik dan wisata massal yang tidak ramah lingkungan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		{{-- 5. SOLUTION & METHOD (Roadmap & Hexagonal) --}}
		<section class="py-5 bg-light">
			<div class="container py-4">
				{{-- Solution Roadmap --}}
				<div class="text-center mb-5">
					<h2 class="fw-bold text-primary mb-5">OUR SOLUTION</h2>
					<div class="row justify-content-center">
						<div class="col-md-3 mb-3">
							<div class="p-4 bg-white rounded shadow-sm border-bottom border-4 border-primary h-100">
								<h1 class="fw-bold text-primary">1</h1>
								<h6 class="fw-bold">EDUCATION</h6>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<div class="p-4 bg-white rounded shadow-sm border-bottom border-4 border-primary h-100">
								<h1 class="fw-bold text-primary">2</h1>
								<h6 class="fw-bold">TRANSPLANTATION</h6>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<div class="p-4 bg-white rounded shadow-sm border-bottom border-4 border-primary h-100">
								<h1 class="fw-bold text-primary">3</h1>
								<h6 class="fw-bold">MONITORING</h6>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<div class="p-4 bg-white rounded shadow-sm border-bottom border-4 border-primary h-100">
								<h1 class="fw-bold text-primary">4</h1>
								<h6 class="fw-bold">RESEARCH DATA</h6>
							</div>
						</div>
					</div>
				</div>

				<hr class="my-5">

				{{-- Hexagonal Method --}}
				<div class="row align-items-center g-5 mt-4">
					<div class="col-lg-6">
						<img src="{{ asset('images/about/hexagonal.png') }}" alt="Metode Hexagonal" class="img-fluid rounded shadow">
					</div>
					<div class="col-lg-6">
						<h2 class="fw-bold text-primary mb-3">Metode Hexagonal</h2>
						<p class="text-muted" style="text-align: justify;">
							Metode transplantasi terumbu karang menggunakan <strong>Hexagonal</strong> adalah pendekatan inovatif dalam
							restorasi yang bertujuan memperbaiki ekosistem rusak.
						</p>
						<p class="text-muted" style="text-align: justify;">
							Hexagonal adalah struktur rangka berbentuk bintang yang terbuat dari baja dilapisi bahan anti karat. Struktur ini
							dirancang untuk memberikan tempat kokoh bagi fragmen karang yang ditransplantasikan agar dapat tumbuh dan
							berkembang maksimal.
						</p>
					</div>
				</div>
			</div>
		</section>

		{{-- 6. FILOSOFI LOGO & PETA LOKASI --}}
		<section class="py-5 bg-white">
			<div class="container">
				<div class="row align-items-center mb-5 pb-5 border-bottom">
					<div class="col-md-5 text-center">
						{{-- Ganti dengan logo asli --}}
						<img src="{{ asset('images/about/filosofi-logo.png') }}" alt="Logo Philosophy" class="img-fluid"
							style="max-height: 300px;">
					</div>
					<div class="col-md-7">
						<h3 class="fw-bold text-uppercase mb-4" style="color: #347474;">Filosofi Logo</h3>
						<div class="bg-light p-4 rounded border-start border-5 border-success">
							<p class="mb-0 text-muted" style="text-align: justify;">
								Logo Rumah Coral terdiri atas rumah di tengah yang melambangkan keinginan menyediakan tempat bagi biota laut agar
								terjadi keseimbangan ekosistem.
								<br><br>
								Pada bagian tepi terdapat terumbu karang yang melambangkan fondasi dasar yang kuat. Seluruh elemen berwarna biru
								melambangkan warna laut.
							</p>
						</div>
					</div>
				</div>

				{{-- Peta Lokasi --}}
				<div class="text-center">
					<h2 class="fw-bold mb-4">OUR SITE (LOKASI KAMI)</h2>
					<p class="text-muted mb-4">Fokus area konservasi kami di perairan Pulau Bali dan Nusa Penida.</p>
					<div class="shadow rounded overflow-hidden">
						<img src="{{ asset('images/about/peta-bali.png') }}" alt="Peta Lokasi Bali" class="img-fluid w-100">
					</div>
				</div>
			</div>
		</section>

	</div>
@endsection

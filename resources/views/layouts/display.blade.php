<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="M_Adnan">
	<title>@yield('title', 'Object 3D')</title>

	@vite(['resources/css/animate.css', 'resources/css/bootstrap.min.css', 'resources/css/font-awesome.min.css', 'resources/css/ionicons.min.css', 'resources/css/main.css', 'resources/js/bootstrap.min.js'])

	<style>
		/* CSS Wajib: Pastikan tidak ada margin default yang menyebabkan jarak atas */
		html,
		body {
			margin: 0;
			padding: 0;
		}

		/* CSS Wajib: Tambahkan padding ke body agar konten tidak tertutup fixed-top navbar */
		body {
			padding-top: 70px;
			/* Ganti nilai ini jika navbar  lebih tinggi */
		}

		/* Jika  tidak ingin brand dan menu mepet ke tepi layar, ganti .container-fluid menjadi .container */
	</style>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
			<div class="container-fluid">

				<a class="navbar-brand" href="/">Website 3D Terka</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
					aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="main-nav">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link" href="{{ route('data.index') }}">Beranda</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('data.index') }}">List Terumbu Karang</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div id="wrap">
		<div id="content">
			@yield('content')
		</div>

		<footer class="bg-dark text-light">
			<div class="container py-5">
				<div class="row">

					<div class="col-md-4 col-sm-6 mb-4">
						<h5 class="text-dark fw-bold mb-3">Navigasi Utama</h5>
						<ul class="list-unstyled">
							<li class="mb-2"><a href="/data" class="text-muted text-decoration-none">Beranda</a></li>
							<li class="mb-2"><a href="#" class="text-muted text-decoration-none">List Terumbu Karang</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-6 mb-4">
						<h5 class="text-dark fw-bold mb-3">Tautan Terkait</h5>
						<ul class="list-unstyled">
							<li class="mb-2"><a href="#" class="text-muted text-decoration-none">Tentang Kami</a></li>
							<li class="mb-2"><a href="#" class="text-muted text-decoration-none">Hubungi Kami</a></li>
							<li class="mb-2"><a href="#" class="text-muted text-decoration-none">Kebijakan Privasi</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-12 mb-4">
						<h5 class="text-dark fw-bold mb-3">Tentang Aplikasi</h5>
						<p class="text-muted">Aplikasi visualisasi 3D untuk pelestarian terumbu karang Indonesia, didukung oleh teknologi
							pemodelan 3D terbaru.</p>
						<p class="text-muted small">Hubungi kami: info@website3dterka.com</p>
					</div>

				</div>

				<hr class="my-4">

				<div class="row">
					<div class="col-md-12 text-center">
						<p class="text-muted small mb-0">&copy; 2025 Website 3D Terka. All Rights Reserved.</p>
						<a href="#wrap" class="go-up btn btn-sm btn-outline-secondary mt-3">Kembali ke Atas</a>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>

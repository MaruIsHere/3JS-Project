<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="M_Adnan">
	<title>@yield('title', 'Object 3D')</title>

	@vite(['resources/css/animate.css', 'resources/css/bootstrap.min.css', 'resources/css/font-awesome.min.css', 'resources/css/ionicons.min.css', 'resources/css/main.css', 'resources/css/responsive.css', 'resources/css/style.css', 'resources/js/smooth-scroll.js', 'resources/js/own-menu.js', 'resources/js/jquery-1.11.3.min.js', 'resources/js/jquery.fatNav.min.js', 'resources/js/jquery.lighter.js', 'resources/js/main.js', 'resources/js/bootstrap.min.js', 'resources/js/modernizr.js', 'resources/js/owl.carousel.min.js'])
</head>

<body>
	<header class="">
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"
						aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
							<path
								d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
							</path>
						</svg>
					</button>
					<a class="navbar-brand" href="/">Website 3D Terka</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="main-nav">
					<ul class="nav navbar-nav">
						<li><a href="/data">Beranda</a></li>
						<li><a href="#">List Terumbu Karang</a></li>
						{{-- <li><a href="#">3D Terumbu Karang</a></li> --}}
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</header>

	<div id="wrap">
		<div id="content">
			@yield('content')
		</div>

		<footer>
			<div class="container">
				<div class="row">

					<div class="col-md-4 col-sm-6">
						<h4 class="text-white">Navigasi Utama</h4>
						<ul class="list-unstyled">
							<li><a href="/data">Beranda</a></li>
							<li><a href="#">List Terumbu Karang</a></li>
							{{-- <li><a href="#">3D Terumbu Karang</a></li> --}}
						</ul>
					</div>

					<div class="col-md-4 col-sm-6">
						<h4 class="text-white">Tautan Terkait</h4>
						<ul class="list-unstyled">
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="#">Hubungi Kami</a></li>
							<li><a href="#">Kebijakan Privasi</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-12">
						<h4 class="text-white">Tentang Aplikasi</h4>
						<p>Aplikasi visualisasi 3D untuk pelestarian terumbu karang Indonesia.</p>
					</div>

				</div>

				<hr>

				<div class="row">
					<div class="col-md-12 text-center">
						<p>© 2025 3D Terumbu Karang. All Rights Reserved.</p>
						<a href="#wrap" class="go-up btn btn-default btn-xs">Kembali ke Atas</a>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>

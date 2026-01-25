@extends('layouts.display')

@section('title', 'Detail Object 3D - ' . $data->name)

@section('content')
	<section class="py-5 bg-white">
		<div class="container">

			{{-- 1. BREADCRUMB --}}
			<nav aria-label="breadcrumb" class="mb-4">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-muted">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('data.index') }}" class="text-decoration-none text-muted">Katalog</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">{{ $data->name }}</li>
				</ol>
			</nav>

			<div class="row">
				{{-- 2. KOLOM KIRI (Gambar & Tombol) --}}
				<div class="col-lg-5 col-md-6 mb-4">
					{{-- Main Image Preview --}}
					<div class="card border-0 mb-3 position-relative overflow-hidden shadow-sm rounded">
						@if ($data->image)
							<a href="{{ asset('storage/products/' . $data->image) }}" target="_blank" id="mainImageLink">
								<img id="mainImage" src="{{ asset('storage/products/' . $data->image) }}" alt="{{ $data->name }}"
									class="img-fluid w-100" style="object-fit: cover; aspect-ratio: 4/3; transition: transform 0.3s ease;">
							</a>
						@else
							<div class="bg-light d-flex align-items-center justify-content-center border rounded" style="aspect-ratio: 4/3;">
								<i class="fas fa-image text-muted fa-3x"></i>
							</div>
						@endif

						{{-- Overlay Text (Dibuat non-clickable agar tidak mengganggu link gambar) --}}
						<div class="position-absolute top-50 start-50 translate-middle text-center w-100" style="pointer-events: none;">
							<span class="badge bg-dark bg-opacity-50 fs-6 fw-light px-3 py-2">
								PREVIEW MODEL 3D
							</span>
						</div>
					</div>

					{{-- Thumbnail Gallery --}}
					<div class="d-flex gap-2 mb-4">
						{{-- Thumbnail 1 --}}
						@if ($data->image)
							<div class="thumb-item border rounded p-1 border-primary"
								onclick="changeImage('{{ asset('storage/products/' . $data->image) }}', this)"
								style="cursor: pointer; width: 70px; height: 70px;">
								<img src="{{ asset('storage/products/' . $data->image) }}" class="rounded w-100 h-100"
									style="object-fit: cover;">
							</div>
						@endif

						{{-- Thumbnail 2 --}}
						@if ($data->image_2)
							<div class="thumb-item border rounded p-1"
								onclick="changeImage('{{ asset('storage/products/' . $data->image_2) }}', this)"
								style="cursor: pointer; width: 70px; height: 70px;">
								<img src="{{ asset('storage/products/' . $data->image_2) }}" class="rounded w-100 h-100"
									style="object-fit: cover;">
							</div>
						@endif
					</div>

					{{-- Tombol Lihat 3D --}}
					<a href="{{ route('object3D', $data->id) }}"
						class="btn btn-dark w-100 py-3 fw-bold text-uppercase shadow-sm d-flex align-items-center justify-content-center gap-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-seam"
							viewBox="0 0 16 16">
							<path
								d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm.325 1.483L9 5.356V15l5.154-2.061a.5.5 0 0 0 .346-.464V3.935a.5.5 0 0 0-.5-.5zM8 15V5.356L2.846 3.294a.5.5 0 0 0-.346.464V12.475a.5.5 0 0 0 .346.464z" />
						</svg>
						Lihat 3D
					</a>
				</div>

				{{-- 3. KOLOM KANAN (Informasi Detail) --}}
				<div class="col-lg-7 col-md-6">
					<div class="ps-lg-4">
						<h1 class="fw-bold text-uppercase mb-1">{{ $data->name }}</h1>
						<h4 class="text-muted fw-light mb-4">({{ $data->code }})</h4>

						<hr class="my-4">

						<div class="mb-4">
							<h5 class="fw-bold text-uppercase mb-3">Deskripsi</h5>
							<div class="text-muted lh-lg">
								{!! $data->description !!}
							</div>
						</div>

						@if ($data->information)
							<div class="mt-4 p-3 bg-light rounded border">
								<h6 class="fw-bold text-uppercase small">Info Tambahan:</h6>
								<div class="small text-muted mb-0">
									{!! $data->information !!}
								</div>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>

	<style>
		.ls-1 {
			letter-spacing: 1px;
		}

		.thumb-item:hover {
			border-color: #0d6efd !important;
		}

		#mainImage:hover {
			transform: scale(1.05);
		}
	</style>

	<script>
		function changeImage(imageUrl, element) {
			// Ubah Gambar Utama
			const mainImg = document.getElementById('mainImage');
			const mainLink = document.getElementById('mainImageLink');

			mainImg.src = imageUrl;
			if (mainLink) mainLink.href = imageUrl;

			// Update Border UI Thumbnail
			document.querySelectorAll('.thumb-item').forEach(item => {
				item.classList.remove('border-primary');
			});
			element.classList.add('border-primary');
		}
	</script>
@endsection

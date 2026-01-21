@extends('layouts.display')

@section('title', 'Detail Object 3D - ' . $data->name)

@section('content')
	<section class="py-5 bg-white">
		<div class="container">

			{{-- 1. BREADCRUMB (Navigasi Atas) --}}
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
					{{-- Main Image dengan Overlay Text --}}
					<div class="card border-0 mb-3 position-relative">
						@if ($data->image)
							<img src="{{ asset('storage/products/' . $data->image) }}" alt="{{ $data->name }}"
								class="img-fluid rounded shadow-sm w-100" style="object-fit: cover; aspect-ratio: 4/3;">
						@else
							<div class="bg-light d-flex align-items-center justify-content-center border rounded" style="aspect-ratio: 4/3;">
								<i class="fas fa-image text-muted fa-3x"></i>
							</div>
						@endif

						{{-- Overlay Text "PREVIEW MODEL 3D" (Opsional, sesuai sketsa) --}}
						<div class="position-absolute top-50 start-50 translate-middle text-center w-100">
							<span class="badge bg-dark bg-opacity-50 fs-6 fw-light px-3 py-2">
								PREVIEW MODEL 3D
							</span>
						</div>
					</div>

					{{-- Thumbnail (Gbr Terumbu) --}}
					<div class="d-flex gap-2 mb-4">
						{{-- Contoh Thumbnail (bisa di-loop jika ada multiple images) --}}
						<div class="border rounded p-1 border-primary" style="cursor: pointer;">
							@if ($data->image)
								<img src="{{ asset('storage/products/' . $data->image) }}" class="rounded" width="60" height="60"
									style="object-fit: cover;">
							@else
								<div class="bg-light rounded" style="width: 60px; height: 60px;"></div>
							@endif
						</div>
						{{-- Placeholder thumbnail lain --}}
						<div class="border rounded p-1" style="cursor: pointer; opacity: 0.6;">
							<div class="bg-secondary rounded" style="width: 60px; height: 60px;"></div>
						</div>
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
						{{-- Judul --}}
						<h1 class="fw-bold text-uppercase mb-1">{{ $data->name }}</h1>

						{{-- Subtitle (Hardcoded sesuai sketsa, atau ambil dari database jika ada kolom latin_name) --}}
						<h4 class="text-muted fw-light mb-4">(Pavona Decussata / Cactus Coral)</h4>


						{{-- Spesifikasi (Tebal, Warna) --}}
						{{-- <div class="row mb-4">
							<div class="col-md-6 mb-2">
								<span class="text-muted text-uppercase small ls-1">Tebal</span>
								<p class="fw-bold mb-0">3 - 10 mm</p> 
							</div>
							<div class="col-md-6 mb-2">
								<span class="text-muted text-uppercase small ls-1">Warna</span>
								<p class="fw-bold mb-0">Variasi (Coklat, Hijau)</p> 
							</div>
						</div> --}}

						<hr class="my-4">

						{{-- Deskripsi --}}
						<div class="mb-4">
							<h5 class="fw-bold text-uppercase mb-3">Deskripsi</h5>
							<div class="text-muted lh-lg">
								{!! $data->description !!}
							</div>
						</div>

						{{-- Informasi Tambahan (Opsional, jika masih mau ditampilkan di bawah deskripsi) --}}
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

	{{-- Sedikit CSS tambahan untuk Letter Spacing --}}
	<style>
		.ls-1 {
			letter-spacing: 1px;
		}
	</style>
@endsection

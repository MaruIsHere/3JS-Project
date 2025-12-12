@extends('layouts.display')

@section('title', 'Detail Object 3D')

@section('content')
	@php
		// Mengambil file berdasarkan kolom 'code' di database
		$jsFile = 'resources/js/' . $id->code . '.js';

		// Cek jika file JS benar-benar ada sebelum dimuat (Opsional: lebih baik dilakukan di Controller)
		// Jika Anda yakin file selalu ada, abaikan komentar ini.

	@endphp

	<section class="padding-top-100">

		<div class="shop-detail">
			<div class="heading text-center">
				<h3>{{ $id->name ?? 'Objek 3D' }}</h3>
				<span class="text-muted">
					Scroll Up/Down Untuk Zoom In/Out <br>
					Klik Kiri Untuk Rotasi <br>
					Klik Kanan Untuk Menggeser
				</span>
			</div>
		</div>

		<div class="d-flex justify-content-center my-4">
			<div id="{{ $id->code }}" style="height: 500px; width: 90vw;"></div>
		</div>
		</div>

	</section>

	{{-- Load CSS & JS Dinamis --}}
	@vite(['resources/css/animate.css', 'resources/css/bootstrap.min.css', 'resources/css/font-awesome.min.css', 'resources/css/ionicons.min.css', 'resources/css/main.css', 'resources/js/bootstrap.min.js', $jsFile])

@endsection

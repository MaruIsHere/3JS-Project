@extends('layouts.app2')

@section('title', 'Detail Object 3D')

@section('content')

	@php
		// Mengambil file berdasarkan kolom 'code' di database
		$jsFile = 'resources/js/acropora_cervicornis.js';
		$code = 'acropora_cervicornis';
	@endphp

	<!-- Popular Products -->
	<section class="padding-top-100 padding-bottom-100">

		<!-- SHOP DETAIL -->
		<div class="shop-detail">
			<div class="row">

				<div class="heading text-center">
					<h4>{{ $id->name }}</h4>
					<span>
						Scroll Up/Down Untukk Zoom In/Out <br>
						Klik Kiri Untuk Rotasi <br>
						Klik Kanan Untuk Menggeser </span>
				</div>

				<div id="{{ $code }}"></div>

			</div>
		</div>

	</section>


	@vite(['resources/css/style.css', $jsFile])

@endsection

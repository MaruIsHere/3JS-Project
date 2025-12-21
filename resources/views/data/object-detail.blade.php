@extends('layouts.display')

@section('title', 'Detail Object 3D')

@section('content')


	<section class="py-5">
		<div class="container">

			<div class="shop-detail">
				<div class="row">

					<div class="col-12 text-center mb-4">
						<a href="{{ route('object3D', $data->id) }}" class="text-decoration-none text-dark">
							{{-- Gunakan heading yang semantik, misal h2 --}}
							<h2> {{ $data->name }}</h2>
						</a>
						<span>
							Tekan untuk melihat 3D Model Terumbu Karang <br>
							Berikut penjelasan mengenai terumbu karang Sideropora Mordax:
						</span>
					</div>

					<div class="col-12 col-lg-6 mx-auto text-center mb-5">
						<div>
							@if ($data->image)
								<a href="{{ route('object3D', $data->id) }}">
									<img src="{{ asset('storage/products/' . $data->image) }}" alt="Product Image"
										class="product-image img-fluid rounded shadow">
								</a>
							@else
								<div class="product-image bg-light d-flex align-items-center justify-content-center border rounded"
									style="min-height: 300px;">
									<i class="fas fa-image text-muted fa-3x"></i>
								</div>
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="d-grid gap-2 col-md-8 mx-auto">
				<a href="{{ route('object3D', $data->id) }}"
					class="btn btn-primary btn-lg shadow d-flex align-items-center justify-content-center py-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
						class="bi bi-box-seam me-2" viewBox="0 0 16 16">
						<path
							d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm.325 1.483L9 5.356V15l5.154-2.061a.5.5 0 0 0 .346-.464V3.935a.5.5 0 0 0-.5-.5zM8 15V5.356L2.846 3.294a.5.5 0 0 0-.346.464V12.475a.5.5 0 0 0 .346.464z" />
					</svg>
					<strong>LIHAT MODEL 3D INTERAKTIF</strong>
				</a>
			</div>

			<div class="item-decribe mt-5">
				<ul class="nav nav-tabs" id="productTabs" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="descr-tab" data-bs-toggle="tab" data-bs-target="#descr" type="button"
							role="tab" aria-controls="descr" aria-selected="true">DESCRIPTION</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="tags-tab" data-bs-toggle="tab" data-bs-target="#tags" type="button" role="tab"
							aria-controls="tags" aria-selected="false">INFORMATION</a>
					</li>
				</ul>

				<div class="tab-content border border-top-0 p-3">
					<div class="tab-pane fade show active" id="descr" role="tabpanel" aria-labelledby="descr-tab">
						{!! $data->description !!}
					</div>

					<div class="tab-pane fade" id="tags" role="tabpanel" aria-labelledby="tags-tab">
						{!! $data->information !!}
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

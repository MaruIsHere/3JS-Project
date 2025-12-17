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

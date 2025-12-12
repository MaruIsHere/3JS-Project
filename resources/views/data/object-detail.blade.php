@extends('layouts.app2')

@section('title', 'Detail Object 3D')

@section('content')

	<!-- Popular Products -->
	<section class="padding-top-100 padding-bottom-100">
		<div class="container">

			<!-- SHOP DETAIL -->
			<div class="shop-detail">
				<div class="row">

					<div class="heading text-center">
						<a href="{{ route('object3D', $data->id) }}">
							<h4> {{ $data->name }}</h4>
						</a>
						<span>
							Tekan untuk melihat 3D Model Terumbu Karang <br>
							Berikut penjelasan mengenai terumbu karang Sideropora Mordax:</span>
					</div>


					<!-- Popular Images Slider -->
					<div class="col mx-auto d-block text-center">
						<!-- Images Slider -->
						<div>
							<ul>
								<li class="img-responsive">
									@if ($data->image)
										<a href="{{ route('object3D', $data->id) }}">
											<img src="{{ asset('storage/products/' . $data->image) }}" alt="Product Image" class="product-image">
										@else
											<div class="product-image bg-light d-flex align-items-center justify-content-center">
												<i class="fas fa-image text-muted"></i>
											</div>
									@endif
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!--======= PRODUCT DESCRIPTION =========-->
			<div class="item-decribe">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
					<li role="presentation" class="active"><a href="#descr" role="tab" data-toggle="tab">DESCRIPTION</a></li>
					<li role="presentation"><a href="#tags" role="tab" data-toggle="tab">INFORMATION</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content animate fadeInUp" data-wow-delay="0.4s">
					<!-- DESCRIPTION -->
					<div role="tabpanel" class="tab-pane fade in active" id="descr">
						{{ $data->description }}
					</div>

					<!-- TAGS -->
					<div role="tabpanel" class="tab-pane fade" id="tags">
						<p>
							{{ $data->information }}
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

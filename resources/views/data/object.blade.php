@extends('layouts.display')

@section('title', 'Object 3D')

@section('content')
	<section class="bg-light" style="padding-top: 100px; padding-bottom: 100px;">
		<div class="container">

			<div class="heading text-center mb-5">
				<h4>Daftar Object 3D Terumbu Karang</h4>
				<span>List dari 3D Terumbu Karang</span>
			</div>

			<div class="row row-fix">
				@foreach ($datas as $key => $data)
					<div class="col-6 col-md-4 col-lg-3 column-spacing gy-5">

						<div class="card h-100 shadow-sm hover-card d-flex flex-column">

							<div class="position-relative d-flex justify-content-center align-items-center bg-white py-3"
								style="height: 250px; overflow: hidden;">

								<a href="{{ route('data.show', $data) }}" class="d-block text-center w-100">
									@if ($data->image)
										<img src="{{ asset('storage/products/' . $data->image) }}" alt="{{ $data->name }}" class="img-fluid">
									@else
										<div class="d-flex align-items-center justify-content-center" style="height: 240px;">
											<i class="fas fa-cube fa-4x text-secondary opacity-25"></i>
										</div>
									@endif
								</a>
							</div>

							<div class="card-body text-center border-top flex-grow-1">
								<h6 class="card-title mb-0">
									<a href="{{ route('data.show', $data) }}" class="text-decoration-none text-dark fw-bold stretched-link">
										{{ $data->name }}
									</a>
								</h6>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			{{ $datas->links() }}
		</div>
	</section>

@endsection

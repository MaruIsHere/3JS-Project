@extends('layouts.display')

@section('title', 'Object 3D')

@section('content')
	<section class="pt-24 pb-24">
	<div class="max-w-7xl mx-auto px-4">


	<div class="text-center mb-10">
	<h4 class="text-2xl font-bold text-white">Daftar Object 3D Terumbu Karang</h4>
	<span class="text-white">List dari 3D Terumbu Karang</span>
	</div>


	<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
	@foreach ($datas as $data)
	<div class="bg-gradient-to-br from-[#0d161a] to-[#1a2e38] rounded-xl shadow hover:shadow-lg transition duration-300 flex flex-col">


	<!-- Image -->
	<div class="relative flex justify-center items-center bg-gradient-to-br from-[#0d161a] to-[#1a2e38] py-3 h-[250px] overflow-hidden rounded-t-xl">
	<a href="{{ route('data.show', $data) }}" class="block w-full text-center">
	@if ($data->image)
	<img src="{{ asset('storage/products/' . $data->image) }}"
	alt="{{ $data->name }}"
	class="max-h-[220px] mx-auto object-contain">
	@else
	<div class="flex items-center justify-center h-[220px]">
	<svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
	<path stroke-linecap="round" stroke-linejoin="round" d="M21 16.5V7.5a2.25 2.25 0 00-1.086-1.94l-7.5-4.5a2.25 2.25 0 00-2.328 0l-7.5 4.5A2.25 2.25 0 003 7.5v9a2.25 2.25 0 001.086 1.94l7.5 4.5a2.25 2.25 0 002.328 0l7.5-4.5A2.25 2.25 0 0021 16.5z"/>
	</svg>
	</div>
	@endif
	</a>
	</div>


	<!-- Title -->
	<div class="border-t p-4 text-center flex-grow">
	<a href="{{ route('data.show', $data) }}"
	class="text-white font-semibold hover:text-sky-400 transition">
	{{ $data->name }}
	</a>
	</div>


	</div>
	@endforeach
	</div>


	<!-- Pagination -->
	<div class="mt-10">
	{{ $datas->links() }}
	</div>
	</div>
	</section>
@endsection

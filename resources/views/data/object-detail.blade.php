@extends('layouts.display')

@section('title', 'Detail Object 3D - ' . $data->name)

@section('content')
	<section class="py-24">
<div class="max-w-7xl mx-auto px-4">


{{-- 1. BREADCRUMB --}}
<nav class="mb-6 text-sm text-white">
<ol class="flex items-center space-x-2">
<li><a href="{{ route('home') }}" class="hover:text-sky-400">Home</a></li>
<li>/</li>
<li><a href="{{ route('data.index') }}" class="hover:text-sky-400">Katalog</a></li>
<li>/</li>
<li class="text-sky-400 font-medium">{{ $data->name }}</li>
</ol>
</nav>


<div class="grid md:grid-cols-2 gap-10">


{{-- 2. KOLOM KIRI --}}
<div>


{{-- Main Image --}}
<div class="relative overflow-hidden rounded-xl shadow mb-4 group">
@if ($data->image)
<a href="{{ asset('storage/products/' . $data->image) }}" target="_blank" id="mainImageLink">
<img id="mainImage"
src="{{ asset('storage/products/' . $data->image) }}"
alt="{{ $data->name }}"
class="w-full aspect-[4/3] object-cover transition-transform duration-300 group-hover:scale-105">
</a>
@else
<div class="flex items-center justify-center aspect-[4/3] bg-gray-100 text-gray-400 text-3xl">
🖼️
</div>
@endif


<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<span class="bg-black/50 text-white text-sm px-4 py-2 rounded">
PREVIEW MODEL 3D
</span>
</div>
</div>


{{-- Thumbnails --}}
<div class="flex gap-3 mb-6">
@if ($data->image)
<div class="thumb-item border-2 border-sky-400 rounded cursor-pointer w-[70px] h-[70px] p-1"
onclick="changeImage('{{ asset('storage/products/' . $data->image) }}', this)">
<img src="{{ asset('storage/products/' . $data->image) }}" class="w-full h-full rounded object-cover">
</div>
@endif


@if ($data->image_2)
<div class="thumb-item border-2 border-transparent hover:border-white rounded cursor-pointer w-[70px] h-[70px] p-1"
onclick="changeImage('{{ asset('storage/products/' . $data->image_2) }}', this)">
<img src="{{ asset('storage/products/' . $data->image_2) }}" class="w-full h-full rounded object-cover">
</div>
@endif
</div>


{{-- Button Lihat 3D --}}
<a href="{{ route('object3D', $data->id) }}"
class="w-full flex items-center justify-center gap-2 bg-sky-400 hover:bg-gradient-to-br from-[#0d161a] to-[#1a2e38] text-white py-3 rounded-xl font-bold uppercase shadow transition">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
viewBox="0 0 16 16">
<path
d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm.325 1.483L9 5.356V15l5.154-2.061a.5.5 0 0 0 .346-.464V3.935a.5.5 0 0 0-.5-.5zM8 15V5.356L2.846 3.294a.5.5 0 0 0-.346.464V12.475a.5.5 0 0 0 .346.464z" />
</svg>
Lihat 3D
</a>
</div>


{{-- 3. KOLOM KANAN --}}
<div>
<h1 class="text-3xl font-bold uppercase mb-1 text-white">{{ $data->name }}</h1>
<h4 class="text-white mb-6">({{ $data->code }})</h4>


<hr class="my-6 border-white">


<div class="mb-6">
<h5 class="font-bold uppercase mb-3 text-white">Deskripsi</h5>
<div class="text-white leading-relaxed">
{!! $data->description !!}
</div>
</div>


@if ($data->information)
<div class="mt-6 bg-gradient-to-br from-[#0d161a] to-[#1a2e38] border-l-4 border-sky-400 p-4 rounded">
<h6 class="font-bold uppercase text-sm mb-1 text-white">Info Tambahan:</h6>
<div class="text-sm text-white">
{!! $data->information !!}
</div>
</div>
@endif
</div>


</div>
</div>
</section>


<script>
function changeImage(imageUrl, element) {
const mainImg = document.getElementById('mainImage');
const mainLink = document.getElementById('mainImageLink');


mainImg.src = imageUrl;
if (mainLink) mainLink.href = imageUrl;


document.querySelectorAll('.thumb-item').forEach(item => {
item.classList.remove('border-blue-500');
item.classList.add('border-transparent');
});
element.classList.add('border-blue-500');
}
</script>
@endsection

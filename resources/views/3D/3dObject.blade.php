@extends('layouts.display')

@section('title', 'Detail Object 3D')

@section('content')
	@php
// Ambil file JS berdasarkan code
$jsFile = 'resources/js/' . $id->code . '.js';
@endphp

{{-- Load CSS & JS Dinamis --}}
@vite([
'resources/css/animate.css',
'resources/css/tailwindoutput.css',
'resources/css/font-awesome.min.css',
'resources/css/ionicons.min.css',
$jsFile
])

<style>
.label3d {
  position: relative;
  pointer-events: auto;
}

.info-icon {
  font-size: 20px;
  background: rgba(0,0,0,0.6);
  color: white;
  padding: 5px 8px;
  border-radius: 50%;
  cursor: pointer;
  user-select: none;
}

.info-popup {
  position: absolute;
  top: 60px;
  left: -115px;
  background: rgba(0,0,0,0.85);
  color: white;
  padding: 10px;
  border-radius: 6px;
  width: 260px;
  font-size: 12px;
  line-height: 1.4;
  z-index: 10;
  text-align:center;
}
</style>


<section class="pt-24 pb-16">


{{-- Heading --}}
<div class="text-center mb-8 px-4">
<h3 class="text-3xl font-bold mb-2 text-white">{{ $id->name ?? 'Objek 3D' }}</h3>
<span class="text-white text-sm leading-relaxed block">
Scroll Up / Down Untuk Zoom In/Out <br>
Klik Kiri Untuk Rotasi <br>
Klik Kanan Untuk Menggeser
</span>
</div>


{{-- Canvas 3D --}}
<div class="flex justify-center my-6">
<div id="{{ $id->code }}" class="h-[500px] w-[90vw] rounded-xl shadow-lg bg-gradient-to-br from-[#0d161a] to-[#1a2e38]"></div>
</div>


</section>
@endsection

@extends('layouts.app2')

@section('title', 'Object 3D')

@section('content')
    <!-- New Arrival -->
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>Daftar Object 3D Terumbu Karang</h4>
          <span>Berikut adalah list terumbu karang:</span> </div>
        </div>
      
      <!-- New Arrival -->
      <div class="arrival-block"> 

        @foreach ($datas as $key => $data)
         <!-- Item -->
        <div class="item"> 
          <!-- Images --> 
          @if($data->image)
                <img src="{{ asset('storage/products/' . $data->image) }}" 
                alt="Product Image" class="product-image">
          @else
                <div class="product-image bg-light d-flex align-items-center justify-content-center">
                  <i class="fas fa-image text-muted"></i>
               </div>
          @endif
          <!-- Item Name -->
          <div class="item-name"> <a href="{{ route('data.show', $data) }}">{{ $data->name }}</a>
          </div>
        </div>
            
        @endforeach
      </div>
    </section>
@endsection
  
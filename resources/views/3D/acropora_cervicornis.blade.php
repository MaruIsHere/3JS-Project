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
                <h4>Sideropora Mordax</h4>
                <span>
                  Scroll Up/Down Untukk Zoom In/Out <br>  
                  Klik Kiri Untuk Rotasi <br>
                  Klik Kanan Untuk Menggeser  </span> 
            </div>
           
             <div id="acropora_cervicornis"></div>
            
          </div>
        </div>

      </div>
    </section>


     @vite([
        'resources/css/style.css',
        'resources/js/acropora_cervicornis.js'
    ])
   
@endsection
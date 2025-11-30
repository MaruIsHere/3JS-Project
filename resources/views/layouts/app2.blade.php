<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>@yield('title', 'Object 3D')</title>
</head>
<body>


<!-- Wrap -->
<div id="wrap"> 
  
    <!-- header -->
  <header>
    <div class="sticky">
      <div class="container"> 
        
        <nav class="navbar">
          <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
                <ul class="nav">

                <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Ikon Toggle</a>
                    
                    <ul class="dropdown-menu">
                        <li> 
                            <a href="/data">Beranda</a> 
                        </li>
                        <li> 
                            <a href="">List Terumbu Karang</a> 
                        </li>
                        <li> 
                            <a href="">3D Terumbu Karang</a> 
                        </li>
                    </ul>
                    
                </li>      
                
                <li> 
                    <a href="">Judul Aplikasi </a> 
                </li>
                    

                </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

<!-- Content -->
<div id="content"> 

@yield('content')

<footer>
    <div class="container"> 
        
        <div class="col-md-3">
            <li><a href="#."> Beranda</a></li>
        </div>

         <div class="col-md-3">
            <li><a href="#."> List Terumbu Karang</a></li>
        </div>

         <div class="col-md-3">
            <li><a href="#."> 3D Terumbu Karang</a></li>
        </div>

         <div class="col-md-3">
            <li><a href="#.">---</a></li>
        </div>

       
    
        <!-- Rights -->
        
        <div class="rights">
            <p>© 2025 3D Terumbu Karang </p>
            <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
        </div>
    </div>
  </footer>
  
  <!--======= RIGHTS =========--> 
  
</div>
@vite([
    'resources/css/animate.css',
    'resources/css/bootstrap.min.css',
    'resources/css/font-awesome.min.css',
    'resources/css/ionicons.min.css',
    'resources/css/main.css',
    'resources/css/responsive.css',
    'resources/css/style.css',
    'resources/js/smooth-scroll.js',
    'resources/js/own-menu.js',
    'resources/js/jquery-1.11.3.min.js',
    'resources/js/jquery.fatNav.min.js',
    'resources/js/jquery.lighter.js',
    'resources/js/main.js',
    'resources/js/bootstrap.min.js',
    'resources/js/modernizr.js',
    'resources/js/owl.carousel.min.js'
])


</body>
</html>
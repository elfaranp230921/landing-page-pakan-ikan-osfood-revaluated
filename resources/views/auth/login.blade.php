<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Osfood Revaluated</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="{{asset('asset')}}/image/icon.png" rel="shortcut icon" type="image/x-icon">
    <link href="{{asset('Arsha')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{asset('Arsha')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('Arsha')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('Arsha')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('Arsha')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('Arsha')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('Arsha')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('Arsha')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{asset('Arsha')}}/assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('login-form-09')}}/fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('login-form-09')}}/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('login-form-09')}}/css/style.css">

    <title>Osfood Account</title>
  </head>
  <body>
  
<!-- ======= Header ======= -->
<header id="header" class="fixed-top" style= "background: #ffcf00">
    <div class="container d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo me-auto"><img src="{{asset('asset')}}/image/logo_osfood.png" alt="" class="img-fluid"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('Arsha')}}/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Information</a></li>
            <li><a class="nav-link  scrollto" href="#portfolio">Product</a></li>
            <li><a class="nav-link scrollto" href="#team">Testimonial</a></li>
            <li><a class="nav-link scrollto" href="#article">Article</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="/login">Sign In</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3>Sign In to <strong>Osfood Revaluated</strong></h3>
                </div>
                <form action="{{ url('login') }}" method="POST">
                  @csrf
                  <div class="form-group first">
                    <label for="email">Email Addres</label>
                    <input type="email" name="email" class="form-control">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                   @enderror
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                   @enderror
                  </div>
                
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                  </div>

                  <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-warning">

                  <span class="d-block text-center my-4 text-muted"> or sign in with</span>
                  
                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span> 
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  <div id="preloader"></div>
  
  <!-- Vendor JS Files -->
  <script src="{{asset('Arsha')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('Arsha')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('Arsha')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('Arsha')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('Arsha')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('Arsha')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('Arsha')}}/assets/vendor/php-email-form/validate.js"></script>
  
  <!-- Template Main JS File -->
  <script src="{{asset('Arsha')}}/assets/js/main.js"></script>
    <script src="{{asset('login-form-09')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('login-form-09')}}/js/popper.min.js"></script>
    <script src="{{asset('login-form-09')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('login-form-09')}}/js/main.js"></script>
  </body>
</html>
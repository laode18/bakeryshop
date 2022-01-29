<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Landing Page - BakeryShop</title>
        <meta content="" name="description">

        <meta content="" name="keywords">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ URL::asset('img/favicon.png'); }}">
        <link href="{{ URL::asset('img/apple-touch-icon.png'); }}" rel="apple-touch-icon">
        <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('img/chef.png')}}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ URL::asset('vendor/aos/aos.css'); }}" rel="stylesheet">
        <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css'); }}" rel="stylesheet">
        <link href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css'); }}" rel="stylesheet">
        <link href="{{ URL::asset('vendor/glightbox/css/glightbox.min.css'); }}" rel="stylesheet">
        <link href="{{ URL::asset('vendor/remixicon/remixicon.css'); }}" rel="stylesheet">
        <link href="{{ URL::asset('vendor/swiper/swiper-bundle.min.css'); }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ URL::asset('css/style.css'); }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        
        
    <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ URL::asset('img/chef.png'); }}" alt="">
        <span>BakeryShop</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="/loginuser">Sign In</a></li>
          <li><a class="nav-link scrollto" href="/registration">Sign Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Kami menawarkan berbagai macam jenis kue dan roti</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Gurih dan Lezat dengan berbagai macam rasa!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="/loginuser" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ URL::asset('img/back1.png'); }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('vendor/purecounter/purecounter.js'); }}"></script>
  <script src="{{ URL::asset('vendor/aos/aos.js'); }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
  <script src="{{ URL::asset('vendor/glightbox/js/glightbox.min.js'); }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js'); }}"></script>
  <script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js'); }}"></script>
  <script src="{{ URL::asset('vendor/php-email-form/validate.js'); }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('js/main.js'); }}"></script>

    </body>
</html>

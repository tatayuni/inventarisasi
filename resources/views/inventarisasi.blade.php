@extends('layouts.main')

@section('container')
     
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Inventarisasi</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('template/assets/vendor/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('template/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{ asset('template/assets/vendor/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('template/assets/vendor/aos/dist/aos.css')}}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('template/assets/css/theme.min.css')}}">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header center-aligned-navbar header-bg-transparent header-white-nav-links-lg header-abs-top"
          data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
    <div class="header-section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">

          <!-- Secondary Content -->
          <div class="navbar-nav-wrap-content text-center">
            <div class="d-none d-lg-block">
            </div>
          </div>
          <!-- End Secondary Content -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="position-relative border-bottom">
      <!-- Hero Carousel Main -->
      <div class="container mt-9 py-5">
        <div class="js-slide gradient-y-overlay-sm-gray-900 bg-img-hero" style="background-image: url(./assets/img/1920x800/img2.jpg);">
          <!-- Slide #1 -->
          </div>
          <!-- End Slide #1 -->
        </div>


    <!-- Features Section -->
    <div class="bg-dark rounded-lg mx-3 mx-xl-10" style="background-image: url{{ asset('template/assets/svg/components/abstract-shapes-20.svg')}};">
      <div class="container-xl container-fluid space-1 space-md-2 px-4 px-md-8 px-lg-10">
        <div class="px-3">
          <!-- Title -->
          <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">DISKOMINFO</span>
            <h2 class="text-white">Sistem Informasi Inventarisasi Aplikasi OPD</h2>
          </div>
          <!-- End Title -->

          <!-- Slick Carousel -->
          <div class="js-slick-carousel slick slick-equal-height ie-slick-equal-height slick-gutters-3"
              data-hs-slick-carousel-options='{
                 "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-n2\"></span>",
                 "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-n2\"></span>",
                 "slidesToShow": 3,
                 "infinite": true,
                 "autoplay": true,
                 "autoplaySpeed": 3000,
                 "dots": true,
                 "dotsClass": "slick-pagination slick-pagination-white d-none mt-5",
                 "responsive": [{
                   "breakpoint": 992,
                   "settings": {
                     "slidesToShow": 2
                     }
                   }, {
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 2
                     }
                   }, {
                   "breakpoint": 554,
                   "settings": {
                     "slidesToShow": 1
                   }
                 }]
               }'>
              @foreach($data as $datanya)
            <div class="js-slide mb-4">
              <!-- Card Info -->
              <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img_upload/'.$datanya->image)}}" alt="Image Description" style="height:200px; width:270px;">
                <div class="card-body">
                  <h3>{{ $datanya->nama_aplikasi }}</h3>
                  <p class="mb-0">{{ $datanya->keterangan }}</p>
                </div>
                <div class="card-footer border-0 pt-0">
                  <a class="font-weight-bold" href="{{ $datanya->url }}" target="_blank">Go To <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
              </div>
              <!-- End Card Info -->
            </div>
            @endforeach

          
          </div>
          <!-- End Slick Carousel -->
        </div>
      </div>
    </div>
    <!-- End Features Section -->

    <!-- Features Section -->
    <div class="overflow-hidden">
      <div class="container space-2 space-lg-1 mb-5">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
          <span class="d-block small font-weight-bold text-cap mb-2">DISKOMINFO</span>
          <h2>Organisasi Perangkat Daerah dengan Domain dari Diskominfo </h2>
        </div>
        <!-- End Title -->

        <div class="w-md-80 mx-md-auto">
          <div class="row justify-content-lg-center align-items-md-center">
            <div class="col-md-5 mb-7 mb-md-0">
              <!-- Features -->
              <div class="media mb-4">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-check"></i>
                </span>
                <div class="media-body text-dark">
                Bagian Pemerintahan Setda
                </div>
              </div>
              <div class="media mb-4">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-check"></i>
                </span>
                <div class="media-body text-dark">
                DPMPTSP   
                </div>
              </div>
              <div class="media mb-4">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-check"></i>
                </span>
                <div class="media-body text-dark">
                  Bappeda
                </div>
              </div>
              <div class="media mb-4">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-check"></i>
                </span>
                <div class="media-body text-dark">
                  Dikpora
                </div>
              </div>
              <div class="media mb-4">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-check"></i>
                </span>
                <div class="media-body text-dark">
                 BPPKAD
                </div>
              </div>
              <a class="media" href="#">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-ellipsis-h"></i>
                </span>
                <div class="media-body">
                  Dan Sebagainya
                </div>
              </a>
              <!-- End Features -->
            </div>

            <div class="col-md-7 col-lg-5 mb-6">
              <div class="position-relative">
                <!-- Card -->
                <div class="card">
                  <div class="card-body">
                    <figure class="w-100 max-w-6rem mb-4">
                      <img class="img-fluid" src="{{ asset('template/assets/svg/icons/icon-2.svg')}}" alt="SVG">
                    </figure>
                    <h3>Apa itu Sistem Informasi Inventarisasi Aplikasi OPD?</h3>
                    <p>Sistem Informasi Inventarisasi Aplikasi OPD adalah Sistem Informasi atau daftar data inventarisasi aplikasi milik Dinas Komunikasi dan Informatika Kabupaten Wonosobo yang dipakai oleh Organisasi Perangkat Daerah yang ada di lingkungan Kabupaten Wonosobo.</p>
                  </div>
                </div>
                <!-- End Card -->

                <!-- SVG Elements -->
                <figure class="max-w-19rem w-100 position-absolute bottom-0 right-0 z-index-n1">
                  <div class="mb-n7 mr-n7">
                    <img class="img-fluid" src="{{ asset('template/assets/svg/components/dots-2.svg')}}" alt="Image Description">
                  </div>
                </figure>
                <!-- End SVG Elements -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Features Section -->
  </main>
  <!-- ========== END MAIN ========== -->


  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory  -->
  <script src="{{ asset('template/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('template/assets/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/hs-unfold/dist/hs-unfold.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/aos/dist/aos.js')}}"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF HEADER
      // =======================================================
      var header = new HSHeader($('#header')).init();


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();


      // INITIALIZATION OF UNFOLD
      // =======================================================
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


      // INITIALIZATION OF SLICK CAROUSEL
      // =======================================================
      $('.js-slick-carousel').each(function() {
        var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
      });


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF GO TO
      // =======================================================
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
  </script>
</body>
</html>






@endsection
  


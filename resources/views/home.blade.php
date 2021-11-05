@extends('layouts.main')
@section('container')

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex position-relative">
      <div class="container d-lg-flex align-items-lg-center space-top-2 space-lg-0 min-vh-lg-100">
        <!-- Content -->
        <div class="w-md-100">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-5 mt-11">
                <h2 class="display-4 mb-3">
                  Wonosobo menuju

                  <span class="text-primary text-highlight-warning">
                    <span class="js-text-animation"
                          data-hs-typed-options='{
                            "strings": ["sejahtera.", "maju.", "smartcity."],
                            "typeSpeed": 90,
                            "loop": true,
                            "backSpeed": 30,
                            "backDelay": 2500
                          }'></span>
                  </span>
                </h2>
                <p class="lead">Pelayanan publik yang berkualitas akan menjaga dan membentuk suatu sistem ketertiban dan masyarakat yang harmonis .</p>
              </div>

              <a class="btn btn-primary btn-wide transition-3d-hover" href="/login">Login</a>
            </div>
          </div>
        </div>
        <!-- End Content -->

        <!-- SVG Shape -->
        <figure class="col-lg-7 col-xl-6 d-none d-lg-block position-absolute top-0 right-0 pr-0 ie-main-hero" style="margin-top: 6.75rem;">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1137.5 979.2">
            <path fill="#F9FBFF" d="M565.5,957.4c81.1-7.4,155.5-49.3,202.4-115.7C840,739.8,857,570,510.7,348.3C-35.5-1.5-4.2,340.3,2.7,389
              c0.7,4.7,1.2,9.5,1.7,14.2l29.3,321c14,154.2,150.6,267.8,304.9,253.8L565.5,957.4z"/>
            <defs>
              <path id="mainHeroSVG1" d="M1137.5,0H450.4l-278,279.7C22.4,430.6,24.3,675,176.8,823.5l0,0C316.9,960,537.7,968.7,688.2,843.6l449.3-373.4V0z"/>
            </defs>
            <clipPath id="mainHeroSVG2">
              <use xlink:href="#mainHeroSVG1"/>
            </clipPath>
            <g transform="matrix(1 0 0 1 0 0)" clip-path="url(#mainHeroSVG2)">
              <image width="750" height="750" xlink:href="{{ asset('template/assets/img/750x750/kominfo3.jpg')}}" transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
            </g>
          </svg>
        </figure>
        <!-- End SVG Shape -->
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Articles Section -->
    <div class="container space-2 space-top-xl-3 space-bottom-lg-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2>Sistem Informasi Inventarisasi Aplikasi OPD</h2>
      </div>
      <!-- End Title -->

      <div class="row mx-n2 mx-lg-n3">
        <div class="col-sm-6 col-lg-4 px-2 px-lg-3 mb-3 mb-lg-0" data-aos="fade-up">
          <!-- Card -->
          <a class="card bg-primary text-left h-100 transition-3d-hover" href="{{route ('layanan-online')}}">
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Layanan Online</h3>
                <p class="text-white">Memberikan kemudahan proses pengajuan surat secara online</p>an
              </div>
              <img class="img-fluid w-100" src="{{ asset('template/assets/svg/illustrations/docs-frame.svg') }}" alt="Image Description">
            </div>
            <div class="card-footer border-0 bg-transparent pt-0">
              <span class="font-size-1 text-white font-weight-bold">Ajukan Layanan <i class="fas fa-angle-right fa-sm ml-1"></i></span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 px-2 px-lg-3 mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="150">
          <!-- Card -->
          <a class="card bg-dark text-left h-100 transition-3d-hover" href="{{route ('layanan-inventarisasi.index')}}">
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Inventarisasi</h3>
                <p class="text-white">Sistem Informasi Inventarisasi Aplikasi OPD</p>
              </div>
              <img class="img-fluid w-100" src="{{ asset('template/assets/svg/illustrations/snippets-frame.svg')}}" alt="Image Description">
            </div>
            <div class="card-footer border-0 bg-transparent pt-0">
              <span class="font-size-1 text-white font-weight-bold">Lihat Dokumen <i class="fas fa-angle-right fa-sm ml-1"></i></span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 px-2 px-lg-3" data-aos="fade-up" data-aos-delay="200">
          <!-- Card -->
          <a class="js-go-to card bg-warning text-left h-100 transition-3d-hover" href="{{route ('layanan-online')}}"
             data-hs-go-to-options='{
              "targetSelector": "#demoExamplesSection",
              "offsetTop": 0,
              "position": null,
              "animationIn": false,
              "animationOut": false
             }'>
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Pantauan</h3>
                <p class="text-white">Untuk mengecek status layanan online</p>
              </div>
              <img class="img-fluid w-100" src="{{ asset('template/assets/svg/illustrations/layouts-frame.svg')}}" alt="Image Description">
            </div>
            <div class="card-footer border-0 bg-transparent pt-0">
              <span class="font-size-1 text-white font-weight-bold">Lihat Pantauan <i class="fas fa-angle-right fa-sm ml-1"></i></span>
            </div>
          </a>
          <!-- End Card -->
        </div>
      </div>
    </div>
    <!-- End Articles Section --> 
      </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection
  
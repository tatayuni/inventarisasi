@extends('layouts.main')

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Home Page | Diskominfo Wonosobo</title>

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
  <link rel="stylesheet" href="{{ asset('template/assets/vendor/dzsparallaxer/dzsparallaxer.css')}}">
  <link rel="stylesheet" href="{{ asset('template/assets/vendor/cubeportfolio/css/cubeportfolio.min.css')}}">
  <link rel="stylesheet" href="{{ asset('template/assets/vendor/aos/dist/aos.css')}}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('template/assets/css/theme.min.css')}}">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide"
          data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
    <!-- Search -->
    <div id="searchPushTop" class="search-push-top">
      <div class="container position-relative">
        <div class="search-push-top-content pt-3">
          <!-- Close Button -->
          <div class="search-push-top-close-btn">
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-soft-secondary mt-2 mr-2" href="javascript:;"
                 data-hs-unfold-options='{
                  "target": "#searchPushTop",
                  "type": "jquery-slide",
                  "contentSelector": ".search-push-top"
                 }'>
                <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                </svg>
              </a>
            </div>
          </div>
          <!-- End Close Button -->

          <!-- Input -->
          <form class="input-group">
            <input type="search" class="form-control" placeholder="Search Front" aria-label="Search Front">
            <div class="input-group-append">
              <button type="button" class="btn btn-primary">Search</button>
            </div>
          </form>
          <!-- End Input -->

          <!-- Content -->
          <div class="row d-none d-md-flex mt-7">
            <div class="col-sm-6">
              <span class="h5">Quick Links</span>

              <div class="row">
                <!-- Nav Link -->
                <div class="col-6">
                  <div class="nav nav-sm nav-x-0 flex-column">
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> Search Results List
                    </a>
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> Search Results Grid
                    </a>
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> About
                    </a>
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> Services
                    </a>
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> Invoice
                    </a>
                  </div>
                </div>
                <!-- End Nav Link -->

                <!-- Nav Link -->
                <div class="col-6">
                  <div class="nav nav-sm nav-x-0 flex-column">
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> Profile
                    </a>
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> User Contacts
                    </a>
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> Reviews
                    </a>
                    <a class="nav-link" href="#">
                      <i class="fas fa-angle-right mr-1"></i> Settings
                    </a>
                  </div>
                </div>
                <!-- End Nav Link -->
              </div>
            </div>

            <div class="col-sm-6">
              <!-- Banner -->
              <div class="rounded search-push-top-banner">
                <div class="d-flex align-items-center">
                  <div class="search-push-top-banner-container">
                    <img class="img-fluid search-push-top-banner-img" src="{{ asset('template/assets/img/mockups/img3.png')}}" alt="Image Description">
                    <img class="img-fluid search-push-top-banner-img" src="{{ asset('template/assets/img/mockups/img2.png')}}" alt="Image Description">
                  </div>

                  <div>
                    <div class="mb-4">
                      <span class="h5">Featured Item</span>
                      <p>Create astonishing web sites and pages.</p>
                    </div>
                    <a class="btn btn-xs btn-soft-success transition-3d-hover" href="javascript:;">Apply Now <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Banner -->
            </div>
          </div>
          <!-- End Content -->
        </div>
      </div>
    </div>
    <!-- End Search -->

    <div class="header-section">
      <!-- Topbar -->
      <div class="container header-hide-content pt-2">
        <div class="d-flex align-items-center">
          

          <div class="ml-auto">
            <!-- Jump To -->
            <div class="hs-unfold d-sm-none mr-2">
              <a class="js-hs-unfold-invoker dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;"
                 data-hs-unfold-options='{
                    "target": "#jumpToDropdown",
                    "type": "css-animation",
                    "event": "hover",
                    "hideOnScroll": "true"
                   }'>
                Jump to
              </a>

              <div id="jumpToDropdown" class="hs-unfold-content dropdown-menu">
                <a class="dropdown-item" href="./page-faq.html">Help</a>
                <a class="dropdown-item" href="./page-contacts-agency.html">Contacts</a>
              </div>
            </div>
            <!-- End Jump To -->

            
          </div>

          <ul class="list-inline ml-2 mb-0">
            

           

          </ul>
        </div>
      </div>
      <!-- End Topbar -->

      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <!-- Logo -->
          <a class="navbar-brand" href="./index.html" aria-label="Front">
            <img  style="margin-top:4px; width:300px;" src="{{ asset('template/assets/svg/logos/diskominfo.png') }}" alt="Logo">
          </a>
          <!-- End Logo -->

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

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse">
            <div class="navbar-body header-abs-top-inner">
              <ul class="navbar-nav">
                <!-- Home -->

                  <!-- Home - Mega Menu -->
                  <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="homeMegaMenu">
                    <div class="row no-gutters">
                      <div class="col-lg-6">
                        <!-- Banner Image -->
                        <div class="navbar-banner" style="background-image: url({{ asset('template/assets/img/750x750/img1.jpg')}});">
                          <div class="navbar-banner-content">
                            <div class="mb-4">
                              <span class="h2 d-block text-white">Branding Works</span>
                              <p class="text-white">Experience a level of our quality in both design &amp; customization works.</p>
                            </div>
                            <a class="btn btn-primary btn-sm transition-3d-hover" href="#">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                          </div>
                        </div>
                        <!-- End Banner Image -->
                      </div>

                      <div class="col-lg-6">
                        <div class="row mega-menu-body">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <span class="d-block h5">Classic</span>
                            <a class="dropdown-item active" href="./index.html">Agency</a>
                            <a class="dropdown-item " href="./landing-classic-analytics.html">Analytics <span class="badge badge-primary badge-pill ml-2">Hot</span></a>
                            <a class="dropdown-item " href="./landing-classic-studio.html">Studio</a>
                            <a class="dropdown-item " href="./landing-classic-marketing.html">Marketing</a>
                            <a class="dropdown-item " href="./landing-classic-advertisement.html" target="_blank">Advertisement <span class="badge badge-primary badge-pill ml-2">Hot</span></a>
                            <a class="dropdown-item " href="./landing-classic-consulting.html">Consulting</a>
                            <a class="dropdown-item " href="./landing-classic-portfolio.html">Portfolio</a>
                            <a class="dropdown-item " href="./landing-classic-software.html">Software</a>
                            <a class="dropdown-item " href="./landing-classic-business.html">Business</a>
                          </div>

                          <div class="col-sm-6">
                            <span class="d-block h5">App</span>
                            <div class="mb-3">
                              <a class="dropdown-item " href="./landing-app-ui-kit.html">UI Kit</a>
                              <a class="dropdown-item " href="./landing-app-saas.html">SaaS</a>
                              <a class="dropdown-item " href="./landing-app-workflow.html">Workflow</a>
                              <a class="dropdown-item " href="./landing-app-payment.html">Payment</a>
                              <a class="dropdown-item " href="./landing-app-tool.html">Tool</a>
                            </div>

                            <span class="d-block h5">Onepages</span>
                            <a class="dropdown-item " href="./landing-onepage-corporate.html">Corporate</a>
                            <a class="dropdown-item " href="./landing-onepage-saas.html">SaaS <span class="badge badge-primary badge-pill ml-2">Hot</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Home - Mega Menu -->
                </li>
                <!-- End Home -->

                <!-- Layanan Online -->
                
                  <!-- Pages - Submenu -->
                  <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">

                    <!-- Login -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkPagesLogin" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                      <div id="navSubmenuPagesLogin" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                        
                        <div class="dropdown-divider"></div>
                       
                      </div>
                    </div>
                    <!-- Signup -->
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Pages -->

                <!-- Layanan Online -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link " href="/layanan.blade.php" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Layanan Online</a>

                  <!-- Blog - Submenu -->
                  <div id="blogSubMenu" class="hs-sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                    
               
                    
                  </div>
                  <!-- End Submenu -->
                </li>
                <!-- End Blog -->

                <!-- Aturan -->
                <li class="hs-has-mega-menu "
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "440px"
                      }
                    }'>
                  <a id="shopMegaMenu" class="hs-mega-menu-invoker nav-link  " href="/aturan.blade.php" aria-haspopup="true" aria-expanded="false">Aturan</a>

                  <!-- Aturan - Mega Menu -->
                  <div class="hs-mega-menu" aria-labelledby="shopMegaMenu">
                  </div>
                  <!-- End Aturan - Mega Menu -->
                </li>
                <!-- End Aturan -->

                <!-- Inventarisasi -->
                <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "900px"
                      }
                    }'>
                  <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link" href="/inventarisasi.blade.php" aria-haspopup="true" aria-expanded="false">Inventarisasi</a>

                  <!-- Inventarisasi - Mega Menu -->
                  <div class="hs-mega-menu w-100" aria-labelledby="demosMegaMenu">
                    <div class="row no-gutters">
                      
                        <div class="navbar-promo-card-deck">
                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            
                              <div class="media align-items-center">
                               
                                <div class="media-body">
                                  
                                
                              </div>
                            
                          </div>
                          <!-- End Promo Item -->

                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                           
                              <div class="media align-items-center">
                                
                                <div class="media-body">
                                  
                                </div>
                              </div>
                            
                          </div>
                          <!-- End Promo Item -->
                        </div>

                        <div class="navbar-promo-card-deck">
                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                           
                              <div class="media align-items-center">
                               
                                <div class="media-body">
                                  
                                </div>
                              </div>
                            
                          </div>
                          <!-- End Promo Item -->

                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            
                              <div class="media align-items-center">
                                
                                <div class="media-body">
                                  
                                </div>
                              </div>
                            
                          </div>
                          <!-- End Promo Item -->
                        </div>

                        <div class="navbar-promo-card-deck">
                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            
                              <div class="media align-items-center">
                                
                                <div class="media-body">
                                  
                                </div>
                              </div>
                           
                          </div>
                          <!-- End Promo Item -->

                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            
                              <div class="media align-items-center">
                                
                                <div class="media-body">
                                  
                                </div>
                              </div>
                            
                          </div>
                          <!-- End Promo Item -->
                        </div>
                      </div>

                      <!-- Promo -->
                     
                       
                          <div class="position-relative">
                            
                          </div>
                          
                        
                      
                      <!-- End Promo -->
                    </div>
                  </div>
                  <!-- End Demos - Mega Menu -->
                </li>
                <!-- End Demos -->

                <!-- Pantauan -->
                <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "260px"
                      }
                    }'>
                  <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link " href="/pantauan.blade.php" aria-haspopup="true" aria-expanded="false">Pantauan</a>

                  <!-- Docs - Submenu -->
                  <div class="hs-mega-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px;">
                    <!-- Promo Item -->
                    <div class="navbar-promo-item">
                     
                        
                    
                    </div>
                    <!-- End Promo Item -->

                    <!-- Promo Item -->
                   
                    <!-- End Promo Item -->

                    
                  </div>
                  <!-- End Docs - Submenu -->
                </li>
                <!-- End Pantauan -->

                <!-- Account Login -->
            <li class="list-inline-item">
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary" href="javascript:;" data-toggle="modal" data-target="#signupModal">
                  <i class="fas fa-user-circle"></i>
                </a>
              </div>
            </li>
            <!-- End Account Login -->
              </ul>
            </div>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

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
                            "strings": ["sejahtera.", "damai.", "mobilitas."],
                            "typeSpeed": 90,
                            "loop": true,
                            "backSpeed": 30,
                            "backDelay": 2500
                          }'></span>
                  </span>
                </h2>
                <p class="lead">Pelayanan publik yang berkualitas akan menjaga dan membentuk suatu sistem ketertiban dan masyarakat yang harmonis .</p>
              </div>

              <a class="btn btn-primary btn-wide transition-3d-hover" href="./page-login-simple.html">Login</a>
              <a class="btn btn-link btn-wide" href="#">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
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
              <image width="750" height="750" xlink:href="{{ asset('template/assets/img/750x750/dieng2.jpg')}}" transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
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
          <a class="card bg-primary text-left h-100 transition-3d-hover" href="/layanan.blade.php">
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Layanan Online</h3>
                <p class="text-white">Memberikan kemudahan proses pengajuan surat secara online</p>
              </div>
              <img class="img-fluid w-100" src="{{ asset('template/assets/svg/illustrations/docs-frame.svg') }}" alt="Image Description">
            </div>
            <div class="card-footer border-0 bg-transparent pt-0">
              <span class="font-size-1 text-white font-weight-bold">Ajukan Surat <i class="fas fa-angle-right fa-sm ml-1"></i></span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 px-2 px-lg-3 mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="150">
          <!-- Card -->
          <a class="card bg-dark text-left h-100 transition-3d-hover" href="/inventarisasi.blade.php">
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
          <a class="js-go-to card bg-warning text-left h-100 transition-3d-hover" href="/aturan.blade.php"
             data-hs-go-to-options='{
              "targetSelector": "#demoExamplesSection",
              "offsetTop": 0,
              "position": null,
              "animationIn": false,
              "animationOut": false
             }'>
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Aturan</h3>
                <p class="text-white">Aturan dan langkah-langkah pengajuan surat secara online.</p>
              </div>
              <img class="img-fluid w-100" src="{{ asset('template/assets/svg/illustrations/layouts-frame.svg')}}" alt="Image Description">
            </div>
            <div class="card-footer border-0 bg-transparent pt-0">
              <span class="font-size-1 text-white font-weight-bold">Baca Aturan <i class="fas fa-angle-right fa-sm ml-1"></i></span>
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
  
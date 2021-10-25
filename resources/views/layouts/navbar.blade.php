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
          <a class="navbar-brand" href="{{ route('home')}}" aria-label="Front">
            <img  style="margin-top:4px; width:300px;" src="{{ asset('template/assets/svg/logos/diskominfoo.png') }}" alt="Logo">
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

                <!-- Aturan -->
                <li class="hs-has-mega-menu "
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "440px"
                      }
                    }'>
                  <a id="shopMegaMenu" class="hs-mega-menu-invoker nav-link  {{ ($title === "Beranda") ? 'active' : '' }}" href="{{ route('home')}}" aria-haspopup="true" aria-expanded="false">Beranda</a>

                  <!-- Aturan - Mega Menu -->
                  <div class="hs-mega-menu" aria-labelledby="shopMegaMenu">
                  </div>
                  <!-- End Aturan - Mega Menu -->
                </li>
                <!-- End Aturan -->


                <!-- Aturan -->
                <li class="hs-has-mega-menu "
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "440px"
                      }
                    }'>
                  <a id="shopMegaMenu" class="hs-mega-menu-invoker nav-link  {{ ($title === "Layanan Online") ? 'active' : '' }}" href="{{ route('layanan-online')}}" aria-haspopup="true" aria-expanded="false">Layanan Online</a>

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
                  <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link {{ ($title === "Inventarisasi") ? 'active' : '' }}" href="{{ route('layanan.inventarisasi')}}" aria-haspopup="true" aria-expanded="false">Inventarisasi</a>

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
                  <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link {{ ($title === "Pantauan") ? 'active' : '' }}" href="{{ route('pantauan') }}" aria-haspopup="true" aria-expanded="false">Pantauan</a>

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
                <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary" href="/login" data-target="#signupModal">
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
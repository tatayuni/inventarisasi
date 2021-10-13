<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Home Page | Front - Responsive Website Template</title>

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
          <!-- Language -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;"
               data-hs-unfold-options='{
                  "target": "#languageDropdown",
                  "type": "css-animation",
                  "event": "hover",
                  "hideOnScroll": "true"
                 }'>
              <img class="dropdown-item-icon mr-2" src="{{ asset('template/assets/vendor/flag-icon-css/flags/4x3/us.svg')}}" alt="SVG">
              <span class="d-inline-block d-sm-none">US</span>
              <span class="d-none d-sm-inline-block">United States</span>
            </a>

            <div id="languageDropdown" class="hs-unfold-content dropdown-menu">
              <a class="dropdown-item active" href="#">English</a>
              <a class="dropdown-item" href="#">Deutsch</a>
              <a class="dropdown-item" href="#">Español‎</a>
            </div>
          </div>
          <!-- End Language -->

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

            <!-- Links -->
            <div class="nav nav-sm nav-y-0 d-none d-sm-flex ml-sm-auto">
              <a class="nav-link" href="./page-faq.html">Help</a>
              <a class="nav-link" href="./page-contacts-agency.html">Contacts</a>
            </div>
            <!-- End Links -->
          </div>

          <ul class="list-inline ml-2 mb-0">
            <!-- Search -->
            <li class="list-inline-item">
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-xs btn-icon btn-ghost-secondary" href="javascript:;"
                   data-hs-unfold-options='{
                    "target": "#searchPushTop",
                    "type": "jquery-slide",
                    "contentSelector": ".search-push-top"
                   }'>
                  <i class="fas fa-search"></i>
                </a>
              </div>
            </li>
            <!-- End Search -->

            <!-- Shopping Cart -->
            <li class="list-inline-item">
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-xs btn-icon btn-ghost-secondary" href="javascript:;"
                   data-hs-unfold-options='{
                    "target": "#shoppingCartDropdown",
                    "type": "css-animation",
                    "event": "hover",
                    "hideOnScroll": "true"
                   }'>
                  <i class="fas fa-shopping-cart"></i>
                </a>

                <div id="shoppingCartDropdown" class="hs-unfold-content dropdown-menu dropdown-menu-right dropdown-card text-center" style="min-width: 275px;">
                  <div class="card">
                    <div class="card-body">
                      <figure class="max-w-9rem mx-auto mb-3">
                        <img class="img-fluid" src="{{asset('template/assets/svg/illustrations/empty-cart.svg')}}" alt="SVG">
                      </figure>
                      <span class="d-block">Your cart is empty</span>
                    </div>

                    <div class="card-footer">
                      <small>Free shipping on orders over <strong class="text-dark">$50</strong></small>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- End Shopping Cart -->

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
      <!-- End Topbar -->

      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <!-- Logo -->
          <a class="navbar-brand" href="./index.html" aria-label="Front">
            <img src="{{ asset('template/assets/svg/logos/logo.svg') }}" alt="Logo">
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
                <li class="hs-has-mega-menu navbar-nav-item">
                  <a id="homeMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle active" href="javascript:;" aria-haspopup="true" aria-expanded="false">Landings</a>

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

                <!-- Pages -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                  <!-- Pages - Submenu -->
                  <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                    <!-- Account -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkPagesAccount" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAccount">Account <span class="badge badge-success badge-pill ml-2">New</span></a>

                      <div id="navSubmenuPagesAccount" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesAccount" style="min-width: 230px;">
                        <a class="dropdown-item " href="./account-overview.html">Personal info</a>
                        <a class="dropdown-item " href="./account-login-and-security.html">Login &amp; security</a>
                        <a class="dropdown-item " href="./account-notifications.html">Notifications</a>
                        <a class="dropdown-item " href="./account-preferences.html">Preferences</a>
                        <a class="dropdown-item " href="./account-orders.html">Orders</a>
                        <a class="dropdown-item " href="./account-wishlist.html">Wishlist</a>
                        <a class="dropdown-item " href="./account-billing.html">Plans &amp; payment</a>
                        <a class="dropdown-item " href="./account-address.html">Address</a>
                        <a class="dropdown-item " href="./account-teams.html">Teams</a>
                      </div>
                    </div>
                    <!-- Account -->

                    <!-- Company -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkPagesCompany" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCompany">Company</a>

                      <div id="navSubmenuPagesCompany" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesCompany" style="min-width: 230px;">
                        <a class="dropdown-item " href="./page-about-agency.html">About Agency</a>
                        <a class="dropdown-item " href="./page-services-agency.html">Services Agency</a>
                        <a class="dropdown-item " href="./page-customers.html">Customers</a>
                        <a class="dropdown-item " href="./page-customer-story.html">Customer story</a>
                        <a class="dropdown-item " href="./page-careers.html">Careers</a>
                        <a class="dropdown-item " href="./page-careers-single.html">Careers Single</a>
                        <a class="dropdown-item " href="./page-hire-us.html">Hire Us</a>
                      </div>
                    </div>
                    <!-- Company -->

                    <!-- Portfolio -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkPagesPortfolio" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPortfolio">Portfolio</a>

                      <div id="navSubmenuPagesPortfolio" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesPortfolio" style="min-width: 230px;">
                        <a class="dropdown-item " href="./portfolio-grid.html">Grid</a>
                        <a class="dropdown-item " href="./portfolio-masonry.html">Masonry</a>
                        <a class="dropdown-item " href="./portfolio-modern.html">Modern</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item " href="./portfolio-case-studies-branding.html">Case Studies Branding</a>
                        <a class="dropdown-item " href="./portfolio-case-studies-product.html">Case Studies Product</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item " href="./portfolio-single-page-list.html">Single Page List</a>
                        <a class="dropdown-item " href="./portfolio-single-page-grid.html">Single Page Grid</a>
                        <a class="dropdown-item " href="./portfolio-single-page-masonry.html">Single Page Masonry</a>
                      </div>
                    </div>
                    <!-- End Portfolio -->

                    <!-- Login -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkPagesLogin" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                      <div id="navSubmenuPagesLogin" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                        <a class="dropdown-item " href="./page-login.html">Login</a>
                        <a class="dropdown-item " href="./page-signup.html">Signup</a>
                        <a class="dropdown-item " href="./page-recover-account.html">Recover Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item " href="./page-login-simple.html">Login Simple</a>
                        <a class="dropdown-item " href="./page-signup-simple.html">Signup Simple</a>
                        <a class="dropdown-item " href="./page-recover-account-simple.html">Recover Account Simple</a>
                      </div>
                    </div>
                    <!-- Signup -->

                    <!-- Contacts -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkContactsServices" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuContactsServices">Contacts</a>

                      <div id="navSubmenuContactsServices" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkContactsServices" style="min-width: 230px;">
                        <a class="dropdown-item " href="./page-contacts-agency.html">Contacts Agency</a>
                        <a class="dropdown-item " href="./page-contacts-start-up.html">Contacts Start-Up</a>
                      </div>
                    </div>
                    <!-- Contacts -->

                    <!-- Utilities -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkPagesUtilities" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesUtilities">Utilities</a>

                      <div id="navSubmenuPagesUtilities" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                        <a class="dropdown-item " href="./page-pricing.html">Pricing</a>
                        <a class="dropdown-item " href="./page-faq.html">FAQ</a>
                        <a class="dropdown-item " href="./page-terms.html">Terms &amp; Conditions</a>
                        <a class="dropdown-item " href="./page-privacy.html">Privacy &amp; Policy</a>
                      </div>
                    </div>
                    <!-- Utilities -->

                    <!-- Specialty -->
                    <div class="hs-has-sub-menu">
                      <a id="navLinkPagesSpecialty" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                      <div id="navSubmenuPagesSpecialty" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                        <a class="dropdown-item " href="./page-cover-page.html">Cover Page</a>
                        <a class="dropdown-item " href="./page-coming-soon.html">Coming Soon</a>
                        <a class="dropdown-item " href="./page-maintenance-mode.html">Maintenance Mode</a>
                        <a class="dropdown-item " href="./page-status.html">Status</a>
                        <a class="dropdown-item " href="./page-invoice.html">Invoice</a>
                        <a class="dropdown-item " href="./page-error-404.html">Error 404</a>
                      </div>
                    </div>
                    <!-- Specialty -->
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Pages -->

                <!-- Blog -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a>

                  <!-- Blog - Submenu -->
                  <div id="blogSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                    <a class="dropdown-item " href="./blog-journal.html">Journal</a>
                    <a class="dropdown-item " href="./blog-metro.html">Metro</a>
                    <a class="dropdown-item " href="./blog-newsroom.html">Newsroom</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " href="./blog-profile.html">Blog Profile</a>
                    <a class="dropdown-item " href="./blog-single-article.html">Single Article</a>
                  </div>
                  <!-- End Submenu -->
                </li>
                <!-- End Blog -->

                <!-- Shop -->
                <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "440px"
                      }
                    }'>
                  <a id="shopMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false">Shop</a>

                  <!-- Shop - Mega Menu -->
                  <div class="hs-mega-menu dropdown-menu hs-position-right" aria-labelledby="shopMegaMenu">
                    <div class="mega-menu-body">
                      <span class="d-block h5">Shop Elements</span>

                      <div class="row">
                        <div class="col-sm-6">
                          <a class="dropdown-item " href="./shop-classic.html">Classic</a>
                          <a class="dropdown-item " href="./shop-categories.html">Categories</a>
                          <a class="dropdown-item " href="./shop-categories-sidebar.html">Categories Sidebar</a>
                          <a class="dropdown-item " href="./shop-products-grid.html">Products Grid</a>
                          <a class="dropdown-item " href="./shop-products-list.html">Products List</a>
                        </div>

                        <div class="col-sm-6">
                          <a class="dropdown-item " href="./shop-single-product.html">Single Product</a>
                          <a class="dropdown-item " href="./shop-empty-cart.html">Empty Cart</a>
                          <a class="dropdown-item " href="./shop-cart.html">Cart</a>
                          <a class="dropdown-item " href="./shop-checkout.html">Checkout</a>
                          <a class="dropdown-item " href="./shop-order-completed.html">Order Completed</a>
                        </div>
                      </div>
                    </div>

                    <!-- Mega Menu Banner -->
                    <div class="navbar-product-banner">
                      <div class="d-flex align-items-end">
                        <img class="img-fluid mr-4" src="{{ asset('template/assets/img/mockups/img4.png')}}" alt="Image Description">
                        <div class="navbar-product-banner-content">
                          <div class="mb-4">
                            <span class="h4 d-block text-primary">Win T-shirt</span>
                            <p>Win one of our Front brand T-shirts.</p>
                          </div>
                          <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="./shop-classic.html">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu Banner -->
                  </div>
                  <!-- End Shop - Mega Menu -->
                </li>
                <!-- End Shop -->

                <!-- Demos -->
                <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "900px"
                      }
                    }'>
                  <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false">Demos</a>

                  <!-- Demos - Mega Menu -->
                  <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="demosMegaMenu">
                    <div class="row no-gutters">
                      <div class="col-lg-8">
                        <div class="navbar-promo-card-deck">
                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="./demo-course/index.html">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="{{ asset('template/assets/svg/icons/icon-67.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">Course</span>
                                  <span class="navbar-promo-text">Learn On-demand demo</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->

                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="./demo-app-marketplace/index.html">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="{{ asset('/icons/icon-45.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">App Marketplace</span>
                                  <span class="navbar-promo-text">Marketplace app demo</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
                        </div>

                        <div class="navbar-promo-card-deck">
                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="./demo-help-desk/index.html">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="{{ asset('/icons/icon-4.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">Help Desk</span>
                                  <span class="navbar-promo-text">Help desk demo</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->

                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="./demo-real-estate/index.html">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="{{ asset('/icons/icon-13.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">Real Estate <span class="badge badge-success badge-pill ml-1">New</span></span>
                                  <span class="navbar-promo-text">Real estate demo</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
                        </div>

                        <div class="navbar-promo-card-deck">
                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="./demo-jobs/index.html">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="{{ asset('/icons/icon-19.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">Jobs <span class="badge badge-success badge-pill ml-1">New</span></span>
                                  <span class="navbar-promo-text">Jobs demo</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->

                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link disabled" href="javascript:;">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="{{ asset('/icons/icon-28.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">New demo</span>
                                  <span class="navbar-promo-text">Coming soon...</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
                        </div>
                      </div>

                      <!-- Promo -->
                      <div class="col-lg-4 navbar-promo d-none d-lg-block">
                        <a class="d-block navbar-promo-inner" href="#">
                          <div class="position-relative">
                            <img class="img-fluid rounded mb-3" src="{{ asset('template/assets/img/380x227/img1.jpg')}}" alt="Image Description">
                          </div>
                          <span class="navbar-promo-text font-size-1">Front makes you look at things from a different perspectives.</span>
                        </a>
                      </div>
                      <!-- End Promo -->
                    </div>
                  </div>
                  <!-- End Demos - Mega Menu -->
                </li>
                <!-- End Demos -->

                <!-- Docs -->
                <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "260px"
                      }
                    }'>
                  <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Docs</a>

                  <!-- Docs - Submenu -->
                  <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px;">
                    <!-- Promo Item -->
                    <div class="navbar-promo-item">
                      <a class="navbar-promo-link" href="./documentation/index.html">
                        <div class="media align-items-center">
                          <img class="navbar-promo-icon" src="{{ asset('/icons/icon-2.svg') }}" alt="SVG">
                          <div class="media-body">
                            <span class="navbar-promo-title">
                              Documentation
                              <span class="badge badge-primary badge-pill ml-1">v3.3</span>
                            </span>
                            <small class="navbar-promo-text">Development guides</small>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Promo Item -->

                    <!-- Promo Item -->
                    <div class="navbar-promo-item">
                      <a class="navbar-promo-link" href="./snippets/index.html">
                        <div class="media align-items-center">
                          <img class="navbar-promo-icon" src="{{ asset('/icons/icon-1.svg') }}" alt="SVG">
                          <div class="media-body">
                            <span class="navbar-promo-title">Snippets</span>
                            <small class="navbar-promo-text">Start building</small>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Promo Item -->

                    <div class="navbar-promo-footer">
                      <!-- List -->
                      <div class="row no-gutters">
                        <div class="col-6">
                          <div class="navbar-promo-footer-item">
                            <span class="navbar-promo-footer-text">Check what's new</span>
                            <a class="navbar-promo-footer-text" href="./documentation/changelog.html"> Changelog</a>
                          </div>
                        </div>
                        <div class="col-6 navbar-promo-footer-ver-divider">
                          <div class="navbar-promo-footer-item">
                            <span class="navbar-promo-footer-text">Have a question?</span>
                            <a class="navbar-promo-footer-text" href="http://htmlstream.com/contact-us"> Contact us</a>
                          </div>
                        </div>
                      </div>
                      <!-- End List -->
                    </div>
                  </div>
                  <!-- End Docs - Submenu -->
                </li>
                <!-- End Docs -->

                <!-- Button -->
                <li class="navbar-nav-last-item">
                  <a class="btn btn-sm btn-primary transition-3d-hover" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">Buy Now</a>
                </li>
                <!-- End Button -->
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
                <h1 class="display-4 mb-3">
                  Turn your ideas into a

                  <span class="text-primary text-highlight-warning">
                    <span class="js-text-animation"
                          data-hs-typed-options='{
                            "strings": ["startup.", "future.", "success."],
                            "typeSpeed": 90,
                            "loop": true,
                            "backSpeed": 30,
                            "backDelay": 2500
                          }'></span>
                  </span>
                </h1>
                <p class="lead">Front's feature-rich designed demo pages help you create the best possible product.</p>
              </div>

              <a class="btn btn-primary btn-wide transition-3d-hover" href="./page-login-simple.html">Get Started</a>
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
              <image width="750" height="750" xlink:href="{{ asset('template/assets/img/750x750/img2.jpg')}}" transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
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
        <h2>Learn to develop sites with components and design systems</h2>
      </div>
      <!-- End Title -->

      <div class="row mx-n2 mx-lg-n3">
        <div class="col-sm-6 col-lg-4 px-2 px-lg-3 mb-3 mb-lg-0" data-aos="fade-up">
          <!-- Card -->
          <a class="card bg-primary text-left h-100 transition-3d-hover" href="./documentation/index.html">
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Documentation</h3>
                <p class="text-white">Discover how to build and maintain coding systems using our documentation.</p>
              </div>
              <img class="img-fluid w-100" src="{{ asset('template/assets/svg/illustrations/docs-frame.svg') }}" alt="Image Description">
            </div>
            <div class="card-footer border-0 bg-transparent pt-0">
              <span class="font-size-1 text-white font-weight-bold">Learn more <i class="fas fa-angle-right fa-sm ml-1"></i></span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 px-2 px-lg-3 mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="150">
          <!-- Card -->
          <a class="card bg-dark text-left h-100 transition-3d-hover" href="./snippets/index.html">
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Snippets</h3>
                <p class="text-white">Start browsing our snippets pages with copy-to-clipboard snippets to match Bootstrap's level of quality.</p>
              </div>
              <img class="img-fluid w-100" src="{{ asset('template/assets/svg/illustrations/snippets-frame.svg')}}" alt="Image Description">
            </div>
            <div class="card-footer border-0 bg-transparent pt-0">
              <span class="font-size-1 text-white font-weight-bold">Start building <i class="fas fa-angle-right fa-sm ml-1"></i></span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 px-2 px-lg-3" data-aos="fade-up" data-aos-delay="200">
          <!-- Card -->
          <a class="js-go-to card bg-warning text-left h-100 transition-3d-hover" href="javascript:;"
             data-hs-go-to-options='{
              "targetSelector": "#demoExamplesSection",
              "offsetTop": 0,
              "position": null,
              "animationIn": false,
              "animationOut": false
             }'>
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Layout options</h3>
                <p class="text-white">Apart from 70+ HTML-pages, the theme comes with 3 ready-to-use and stand-alone demo options.</p>
              </div>
              <img class="img-fluid w-100" src="{{ asset('template/assets/svg/illustrations/layouts-frame.svg')}}" alt="Image Description">
            </div>
            <div class="card-footer border-0 bg-transparent pt-0">
              <span class="font-size-1 text-white font-weight-bold">View examples <i class="fas fa-angle-right fa-sm ml-1"></i></span>
            </div>
          </a>
          <!-- End Card -->
        </div>
      </div>
    </div>
    <!-- End Articles Section -->

   
   
   

    
      </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container">
      <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
        <div class="row justify-content-lg-between">
          <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
            <!-- Logo -->
            <div class="mb-4">
              <a href="index.html" aria-label="Front">
                <img class="brand" src="{{ asset('template/assets/svg/logos/logo-white.svg') }}" alt="Logo">
              </a>
            </div>
            <!-- End Logo -->

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item">
                <a class="nav-link media" href="javascript:;">
                    <span class="media">
                      <span class="fas fa-location-arrow mt-1 mr-2"></span>
                      <span class="media-body">
                        153 Williamson Plaza, Maggieberg
                      </span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link media" href="tel:1-062-109-9222">
                    <span class="media">
                      <span class="fas fa-phone-alt mt-1 mr-2"></span>
                      <span class="media-body">
                        +1 (062) 109-9222
                      </span>
                    </span>
                </a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
            <h5 class="text-white">Company</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Careers <span class="badge badge-primary ml-1">We're hiring</span></a></li>
              <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Customers</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Hire us</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
            <h5 class="text-white">Features</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="#">Press</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Release notes</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Integrations</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg">
            <h5 class="text-white">Documentation</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Docs</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Status</a></li>
              <li class="nav-item"><a class="nav-link" href="#">API Reference</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Tech Requirements</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg">
            <h5 class="text-white">Resources</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="media align-items-center">
                      <i class="fa fa-info-circle mr-2"></i>
                      <span class="media-body">Help</span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="media align-items-center">
                      <i class="fa fa-user-circle mr-2"></i>
                      <span class="media-body">Your Account</span>
                    </span>
                </a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>
        </div>
      </div>

      <hr class="opacity-xs my-0">

      <div class="space-1">
        <div class="row align-items-md-center mb-7">
          <div class="col-md-6 mb-4 mb-md-0">
            <!-- Nav Link -->
            <ul class="nav nav-sm nav-white nav-x-sm align-items-center">
              <li class="nav-item">
                <a class="nav-link" href="#">Privacy &amp; Policy</a>
              </li>
              <li class="nav-item opacity mx-3">&#47;</li>
              <li class="nav-item">
                <a class="nav-link" href="#">Terms</a>
              </li>
              <li class="nav-item opacity mx-3">&#47;</li>
              <li class="nav-item">
                <a class="nav-link" href="#">Site Map</a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-md-6 text-md-right">
            <ul class="list-inline mb-0">
              <!-- Social Networks -->
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                  <i class="fab fa-google"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="#">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <!-- End Social Networks -->

              <!-- Language -->
              <li class="list-inline-item">
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker dropdown-toggle btn btn-xs btn-soft-light" href="javascript:;"
                     data-hs-unfold-options='{
                        "target": "#footerLanguage",
                        "type": "css-animation",
                        "animationIn": "slideInDown"
                       }'>
                    <img class="dropdown-item-icon" src="{{ asset('template/assets/vendor/flag-icon-css/flags/4x3/us.svg')}}" alt="United States Flag">
                    <span>United States</span>
                  </a>

                  <div id="footerLanguage" class="hs-unfold-content dropdown-menu dropdown-unfold dropdown-menu-bottom mb-2">
                    <a class="dropdown-item active" href="#">English</a>
                    <a class="dropdown-item" href="#">Deutsch</a>
                    <a class="dropdown-item" href="#">Español</a>
                    <a class="dropdown-item" href="#">Français</a>
                    <a class="dropdown-item" href="#">Italiano</a>
                    <a class="dropdown-item" href="#">日本語</a>
                    <a class="dropdown-item" href="#">한국어</a>
                    <a class="dropdown-item" href="#">Nederlands</a>
                    <a class="dropdown-item" href="#">Português</a>
                    <a class="dropdown-item" href="#">Русский</a>
                  </div>
                </div>
              </li>
              <!-- End Language -->
            </ul>
          </div>
        </div>

        <!-- Copyright -->
        <div class="w-md-75 text-lg-center mx-lg-auto">
          <p class="text-white opacity-sm small">&copy; Front. 2020 Htmlstream. All rights reserved.</p>
          <p class="text-white opacity-sm small">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p>
        </div>
        <!-- End Copyright -->
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
            </svg>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <form class="js-validate">
            <!-- Sign in -->
            <div id="signinModalForm">
              <div class="text-center mb-5">
                <h2>Sign in</h2>
                <p>Don't have an account yet?
                  <a class="js-animation-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalForm",
                         "groupName": "idForm"
                       }'>Sign up here</a>
                </p>
              </div>

              <a class="btn btn-block btn-white mb-2" href="#">
                  <span class="d-flex justify-content-center align-items-center">
                    <img class="avatar avatar-xss mr-2" src="asset('/brands/google.svg')}}" alt="Image Description">
                    Sign in with Google
                  </span>
              </a>

              <a class="js-animation-link btn btn-block btn-primary mb-2" href="#"
                 data-hs-show-animation-options='{
                     "targetSelector": "#signinWithEmailModalForm",
                     "groupName": "idForm"
                   }'>Sign in with Email</a>
            </div>
            <!-- End Sign in -->

            <!-- Sign in with Modal -->
            <div id="signinWithEmailModalForm" style="display: none; opacity: 0;">
              <div class="text-center mb-5">
                <h2>Sign in</h2>
                <p>Don't have an account yet?
                  <a class="js-animation-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalForm",
                         "groupName": "idForm"
                       }'>Sign up here</a>
                </p>
              </div>

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinModalFormSrEmail">Your email</label>
                <input type="email" class="form-control" name="email" id="signinModalFormSrEmail" placeholder="email@address.com" aria-label="email@address.com" required data-msg="Please enter a valid email address.">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinModalFormSrPassword">
                    <span class="d-flex justify-content-between align-items-center">
                      Password
                      <a class="js-animation-link link text-muted" href="javascript:;"
                         data-hs-show-animation-options='{
                           "targetSelector": "#forgotPasswordModalForm",
                           "groupName": "idForm"
                         }'>Forgot Password?</a>
                    </span>
                </label>
                <input type="password" class="form-control" name="password" id="signinModalFormSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Your password is invalid. Please try again.">
              </div>
              <!-- End Form Group -->

              <button type="submit" class="btn btn-block btn-primary">Sign in</button>
            </div>
            <!-- End Sign in with Modal -->

            <!-- Sign up -->
            <div id="signupModalForm" style="display: none; opacity: 0;">
              <div class="text-center mb-5">
                <h2>Sign up</h2>
                <p>Already have an account?
                  <a class="js-animation-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signinModalForm",
                         "groupName": "idForm"
                       }'>Sign in here</a>
                </p>
              </div>

              <a class="btn btn-block btn-white mb-2" href="#">
                  <span class="d-flex justify-content-center align-items-center">
                    <img class="avatar avatar-xss mr-2" src="asset('/brands/google.svg')}}" alt="Image Description">
                    Sign up with Google
                  </span>
              </a>

              <a class="js-animation-link btn btn-block btn-primary mb-2" href="#"
                 data-hs-show-animation-options='{
                     "targetSelector": "#signupWithEmailModalForm",
                     "groupName": "idForm"
                   }'>Sign up with Email</a>

              <div class="text-center mt-3">
                <p class="font-size-1 mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </div>
            <!-- End Sign up -->

            <!-- Sign up with Modal -->
            <div id="signupWithEmailModalForm" style="display: none; opacity: 0;">
              <div class="text-center mb-5">
                <h2>Sign up</h2>
                <p>Already have an account?
                  <a class="js-animation-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signinModalForm",
                         "groupName": "idForm"
                       }'>Sign in here</a>
                </p>
              </div>

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signupModalFormSrEmail">Your email</label>
                <input type="email" class="form-control" name="email" id="signupModalFormSrEmail" placeholder="email@address.com" aria-label="email@address.com" required data-msg="Please enter a valid email address.">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signupModalFormSrPassword">Password</label>
                <input type="password" class="form-control" name="password" id="signupModalFormSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Your password is invalid. Please try again.">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signupModalFormSrConfirmPassword">Confirm password</label>
                <input type="password" class="form-control" name="confirmPassword" id="signupModalFormSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Password does not match the confirm password.">
              </div>
              <!-- End Form Group -->

              <button type="submit" class="btn btn-block btn-primary">Sign up</button>

              <div class="text-center mt-3">
                <p class="font-size-1 mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </div>
            <!-- End Sign up with Modal -->

            <!-- Forgot Password -->
            <div id="forgotPasswordModalForm" style="display: none; opacity: 0;">
              <div class="text-center mb-5">
                <h2>Forgot password?</h2>
                <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
              </div>

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="resetPasswordSrEmail" tabindex="0">
                  <span class="d-flex justify-content-between align-items-center">
                    Your email
                    <a class="js-animation-link d-flex align-items-center link text-muted" href="javascript:;"
                       data-hs-show-animation-options='{
                         "targetSelector": "#signinModalForm",
                         "groupName": "idForm"
                       }'>
                      <i class="fas fa-angle-left mr-2"></i> Back to Sign in
                    </a>
                  </span>
                </label>
                <input type="email" class="form-control" name="email" id="resetPasswordSrEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required data-msg="Please enter a valid email address.">
              </div>
              <!-- End Form Group -->

              <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </div>
            <!-- End Forgot Password -->
          </form>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="asset('/brands/gitlab-gray.svg')}}" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="asset('/brands/fitbit-gray.svg')}}" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="asset('/brands/flow-xo-gray.svg')}}" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="asset('/brands/layar-gray.svg')}}" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Sign Up Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

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
  <script src="{{ asset('template/assets/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/hs-counter/dist/hs-counter.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/appear/dist/appear.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/typed.js/lib/typed.min.js')}}"></script>
  <script src="{{ asset('template/assets/vendor/aos/dist/aos.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('template/assets/js/theme.min.js')}}"></script>

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


      // INITIALIZATION OF TEXT ANIMATION (TYPING)
      // =======================================================
      var typed = $.HSCore.components.HSTyped.init(".js-text-animation");


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function() {
        $.HSCore.components.HSValidation.init($(this), {
          rules: {
            confirmPassword: {
              equalTo: '#signupPassword'
            }
          }
        });
      });


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      $('.js-animation-link').each(function () {
        var showAnimation = new HSShowAnimation($(this)).init();
      });


      // INITIALIZATION OF COUNTER
      // =======================================================
      $('.js-counter').each(function() {
        var counter = new HSCounter($(this)).init();
      });


      // INITIALIZATION OF STICKY BLOCK
      // =======================================================
      var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));


      // INITIALIZATION OF CUBEPORTFOLIO
      // =======================================================
      $('.cbp').each(function () {
        var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
          layoutMode: 'grid',
          filters: '#filterControls',
          displayTypeSpeed: 0
        });
      });

      $('.cbp').on('initComplete.cbp', function() {
        // update sticky block
        cbpStickyFilter.update();
      });

      $('.cbp').on('filterComplete.cbp', function() {
        // update sticky block
        cbpStickyFilter.update();
      });

      $('.cbp').on('pluginResize.cbp', function() {
        // update sticky block
        cbpStickyFilter.update();
      });

      // animated scroll to cbp container
      $('#cbpStickyFilter').on('click', '.cbp-filter-item', function (e) {
        $('html, body').stop().animate({
          scrollTop: $('#demoExamplesSection').offset().top
        }, 200);
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
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{ asset('template/assets/vendor/babel-polyfill/dist/polyfill.js')}}"><\/script>');
  </script>
</body>
</html>
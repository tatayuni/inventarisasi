<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('template/assets/svg/logos/diskominfoo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('modern-admin/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/app-assets/css/pages/dashboard-ecommerce.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('modern-admin/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="{{ route('dashboard') }}"><img  style="margin-top:4px; width:200px;" class="brand-logo" alt="modern admin logo" src="{{ asset('template/assets/svg/logos/diskominfoo.png') }}">
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                            <ul class="mega-dropdown-menu dropdown-menu row p-1">
                                <li class="col-md-4 bg-mega p-2">
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"> Selamat Datang, {{auth()->user()->name}}</span><span class="avatar avatar-online"><img src="{{ asset('modern-admin/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a></a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item {{Request::is('dashboard') ? 'active' : ''}}"><a href="{{ route('dashboard') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                 <li class=" nav-item {{Request::is('inventarisasi') ? 'active' : ''}}"><a href="{{ route('inventarisasi.index') }}"><i class="la la-book"></i><span class="menu-title" data-i18n="Dashboard">Data Inventarisasi</span></a>
                </li>
                <li class=" nav-item "><a href="#"><i class="la la-globe"></i><span class="menu-title" data-i18n="Invoice">Layanan Online</span></a>
                    <ul class="menu-content">
                        <li class="{{Request::is('layananonline') ? 'active' : ''}}"><a class="menu-item" href="{{ route('layananonline.index') }}"><i></i><span data-i18n="Invoice Summary">Belum Punya Aplikasi</span></a>
                        </li>
                        <li class="{{Request::is('pendaftaran') ? 'active' : ''}}"><a class="menu-item" href="{{ route('pendaftaran.index') }}"><i></i><span data-i18n="Invoice Template">Sudah Punya Aplikasi</span></a>
                        </li>
                    </ul>
                </li>
                
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    @yield('container')

    <!-- END: Main Menu-->
    
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>



    <!-- BEGIN: Vendor JS-->`
    <script src="{{ asset('modern-admin/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('modern-admin/app-assets/vendors/js/charts/chartist.min.js')}}"></script>
    <script src="{{ asset('modern-admin/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('modern-admin/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{ asset('modern-admin/app-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{ asset('modern-admin/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
    <script src="{{ asset('modern-admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('modern-admin/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('modern-admin/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('modern-admin/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <script src="{{ asset('modern-admin/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
    <!-- END: Page JS-->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
		 $(document).on('click', '.delete-data-table', function(a){
            a.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you realy want to delete this records? This process cannot be undone.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete!'
            }).then((result) => {
                if (result.value) {
                    a.preventDefault();
                    var url = $(this).attr('href');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    

                    $.ajax({
                        url: url,
                        type: 'delete',
                        success: function () {
                            Swal.fire(
                                'Deleted!',
                                'data has been deleted.',
                                'success'
                            )
                            table.ajax.reload();
                            if(typeof table2){
                                table2.ajax.reload();
                            }
                        }
                    })
                }
            })
        });
	</script>

    @stack('js')


</body>
<!-- END: Body-->

</html>
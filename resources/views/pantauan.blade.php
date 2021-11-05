@extends('layouts.main')
@section('title', 'Pantauan')

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
                  Halaman 
                  <span class="text-primary text-highlight-warning">
                    <span class="js-text-animation"
                          data-hs-typed-options='{
                            "strings": ["Pantauan."],
                            "typeSpeed": 90,
                            "loop": true,
                            "backSpeed": 30,
                            "backDelay": 2500
                          }'></span>
                  </span>
                </h2>
                <p class="lead">Pelayanan publik yang berkualitas akan menjaga dan membentuk suatu sistem ketertiban dan masyarakat yang harmonis .</p>
              </div>
            </div>

        <div class="col-lg-7 mt-7">
        <!-- Search Section -->
        <div class="bg-dark">
              <div class="bg-img-hero-center" style="background-image: url({{ asset('template/assets/svg/components/abstract-shapes-19.svg')}});">
                <div class="container space-1">
                  <div class="w-lg-100 mx-lg-auto">
                    <!-- Input -->
                    <form method="get" class="input-group input-group-merge input-group-borderless">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="askQuestions">
                          <i class="fas fa-search"></i>
                        </span>
                      </div>
                      <input name="q" type="search" class="form-control" placeholder="Masukkan Nomor Tiket" aria-label="Search for answers" aria-describedby="askQuestions">
                    </form>
                    <!-- End Input -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Search Section -->
                <!-- Breadcrumbs Section -->
    @if(request('q') != '')
    <div class="container space-1">
      <div class="w-lg-80 mx-lg-auto">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-no-gutter font-size-1">
        Berikut adalah hasil pencarian dengan nomor tiket &nbsp; <b>{{$data->no}}</b>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Breadcrumbs Section -->

    
    <!-- FAQ Section -->
    <div class="w-lg-80 mx-lg-auto ">
    @if($data->status == 'STATUS_ST_01' && $data->approval_by =='' ||  $data->status == 'STATUS_ST_02' && $data->approval_by !='' || $data->status == 'STATUS_ST_03' && $data->approval_by !='')
        <a class="card card-frame mb-3 mb-lg-5" >
          <div class="card-body">
            <!-- Icon Block -->
            <div class="media d-block d-sm-flex">
              <figure class="w-100 max-w-8rem mb-1 mb-sm-0 mr-sm-4">
                <img class="img-fluid" src="{{ asset('template/assets/svg/icons/icon-15.svg')}}" alt="SVG">
              </figure>
              <div class="media-body">
                <h2 class="h3">Berhasil Dikirim !</h2>
                <p class="font-size-1 text-body">Mohon ditunggu, sedang dalam proses pengecekan..</p>
              </div>
            </div>
            <!-- End Icon Block -->
          </div>
        </a>
      @endif
     

      @if( $data->status == 'STATUS_ST_02' && $data->approval_by !='' || $data->status == 'STATUS_ST_03' && $data->approval_by !='')
        <a class="card card-frame mb-1 mb-lg-5">
          <div class="card-body">
            <!-- Icon Block -->
            <div class="media d-block d-sm-flex">
              <figure class="w-100 max-w-8rem mb-1 mb-sm-0 mr-sm-4">
                <img class="img-fluid" src="{{ asset('template/assets/svg/icons/icon-67.svg')}}" alt="SVG">
              </figure>
              <div class="media-body">
                <h3>Sedang Diproses</h3>
                <p class="font-size-1 text-body">Pengajuan Anda sedang dikerjakan oleh petugas Diskominfo Wonosobo.</p>
                <div class="media">
                </div>
              </div>
            </div>
            <!-- End Icon Block -->
          </div>
        </a>
      @endif

      @if($data->status == 'STATUS_ST_03' && $data->approval_by !='')
        <a class="card card-frame mb-1 mb-lg-5">
          <div class="card-body">
            <!-- Icon Block -->
            <div class="media d-block d-sm-flex">
              <figure class="w-100 max-w-8rem mb-1 mb-sm-0 mr-sm-4">
                <img class="img-fluid" src="{{ asset('template/assets/svg/icons/icon-38.svg')}}" alt="SVG">
              </figure>
              <div class="media-body">
                <h3>Sukses !</h3>
                <p class="font-size-1 text-body">Pengajuan berhasil diselesaikan.</p>
                <div class="media">
                </div>
              </div>
            </div>
            <!-- End Icon Block -->
          </div>
        </a>
        @endif

     

        
      </div>
    <!-- End FAQ Section -->
    @endif




            </div>
          </div>
        </div>
        <!-- End Content --> 
      </div>
    </div>
    <!-- End Hero Section -->
      </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection
  


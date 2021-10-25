@extends('layouts.main')

@section('container')

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex position-relative">
      <div class="container d-lg-flex align-items-lg-center space-lg-0 min-vh-lg-100">
      <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Jumbotron example · Bootstrap v5.1</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>

  @if(!Session::has('keterangan'))
    
<main>
    <div class="fluid py-3"> </div>   
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2 class="text-white">Prosedur</h2>
          <p>Adapun prosedur untuk mengajukan surat pendaftaran secara online adalah sebagai berikut.</p>
          <button class="btn btn-outline-light" type="button">Details</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Aturan</h2>
          <p>Adapun aturan-aturan saat pengajuan surat online adalah sebagai berikut.</p>
          <button class="btn btn-outline-secondary" type="button">Details</button>
        </div>
      </div>
    </div>
  </div>
</main>

<div class="container text-center">
<div class="btn-group btn-group-toggle">
  <a class="js-animation-link btn btn-sm btn-outline-secondary btn-sm-wide active" href="javascript:;"
     data-hs-show-animation-options='{
       "targetSelector": "#firstContent",
       "groupName": "groups",
       "animationType": "css-animation",
       "animationIn": "slideInUp",
       "duration": 400
     }'>
    Belum punya aplikasi / web</a>
  <a class="js-animation-link btn btn-sm btn-outline-secondary btn-sm-wide" href="javascript:;"
     data-hs-show-animation-options='{
       "targetSelector": "#secondContent",
       "groupName": "groups",
       "animationType": "css-animation",
       "animationIn": "slideInUp",
       "duration": 400
     }'>
     Sudah punya aplikasi / web</a>
</div>

<div id="firstContent" class="py-5">
  <!-- Contact Form Section -->
  <div class="container">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2>Belum punya aplikasi / web</h2>
        <p>Whether you have questions or you would just like to say hello, contact us.</p>
      </div>
      <!-- End Title -->

      <div class="w-lg-80 mx-auto">
        <!-- Contacts Form -->
        {{Form::open(['route' => 'layananonline.store', 'method' => 'post', 'class' => 'js-validate','files' => true])}}
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Nama Pengelola (Penanggungjawab)</label>
                {{Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Anda','data-msg' => 'Mohon Masukkan Nama Anda.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">OPD</label>
                {{Form::text('opd', null, ['class' => 'form-control', 'placeholder' => 'Nama OPD','data-msg' => 'Mohon masukkan nama opd.', 'required' => 'required'])}}
              </div>
            </div>

             <!-- Input -->
             <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Email Pengelola(Penanggungjawab)</label>
                {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Pengelola','data-msg' => 'Mohon masukkan email Anda.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

           <!-- Input -->
           <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Whatsapp Pengelola(Penanggungjawab)</label>
                {{Form::text('wa', null, ['class' => 'form-control', 'placeholder' => 'Nomor Whatsapp','data-msg' => 'Mohon masukkan nomor Whatsapp Anda.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->
            </div>

          <!-- Input -->
          <div class="js-form-message mb-3">
            <label class="input-label">Deskripsi Aplikasi (Sistem)</label>
            <div class="input-group">
            {{Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Deskripsi aplikasi', 'data-msg' => 'Mohon untuk diisi.', 'required' => 'required'])}}
            </div>
          </div>
          <!-- End Input -->

           <!-- Input -->
           <div class="js-form-message mb-3">
            <label class="input-label">Alur Aplikasi (Sistem)</label>
            <div class="input-group">
            {{Form::textarea('alur', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Deskripsi aplikasi', 'data-msg' => 'Mohon untuk diisi.', 'required' => 'required'])}}
            </div>
          </div>
          <!-- End Input -->

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
            <p class="small">We'll get back to you in 1-2 business days.</p>
          </div>
          {{ Form::close() }}
        <!-- End Contacts Form -->
      </div>
    </div>
    <!-- End Contact Form Section -->
</div>

<div id="secondContent" class="py-5" style="display: none; opacity: 0;">
  <!-- Contact Form Section -->
  <div class="container">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2>Sudah punya aplikasi / web</h2>
        <p>Whether you have questions or you would just like to say hello, contact us.</p>
      </div>
      <!-- End Title -->

      <div class="w-lg-80 mx-auto">
        <!-- Contacts Form -->
        {{Form::open(['route' => 'pendaftaran.store', 'method' => 'post', 'class' => 'js-validate','files' => true])}}
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Nama Pengelola (Penanggungjawab)</label>
                {{Form::text('nama_pengelola', null, ['class' => 'form-control', 'placeholder' => 'Nama Anda','data-msg' => 'Mohon masukkan nama Anda.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Nama Subdomain</label>
                {{Form::text('subdomain', null, ['class' => 'form-control', 'placeholder' => 'aplikasianda.wonosobokab.go.id atau aplikasianda.wonosobokab.com','data-msg' => 'Mohon masukkan nama subdomain.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">OPD</label>
                {{Form::text('nama_opd', null, ['class' => 'form-control', 'placeholder' => 'Nama OPD','data-msg' => 'Mohon masukkan nama opd.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Versi PHP</label>
                {{Form::text('php', null, ['class' => 'form-control', 'placeholder' => 'Rekomendasi versi php >=7.0','data-msg' => 'Mohon masukkan versi PHP.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

             <!-- Input -->
             <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Email Pengelola (Penanggungjawab)</label>
                {{Form::email('email_pengelola', null, ['class' => 'form-control', 'placeholder' => 'Email Anda','data-msg' => 'Mohon masukkan email Anda..', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Versi Database</label>
                {{Form::text('versi_db', null, ['class' => 'form-control', 'placeholder' => 'versi database MySQL, PgSQL, MongoDB','data-msg' => 'Mohon masukkan versi database.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

            <div class="w-100"></div>

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Whatsapp Pengelola (Penanggungjawab)</label>
                {{Form::text('wa_pengelola', null, ['class' => 'form-control', 'placeholder' => 'Nomor Whatsapp Anda','data-msg' => 'Mohon masukkan nomor Whatsapp.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Bahasa Pemrograman</label>
                {{Form::text('bahasa_pemrograman', null, ['class' => 'form-control', 'placeholder' => 'Bahasa Pemrograman','data-msg' => 'Mohon masukkan bahasa pemrograman.', 'required' => 'required'])}}
              </div>
            </div>
            <!-- End Input -->
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
            <p class="small">We'll get back to you in 1-2 business days.</p>
          </div>
          {{ Form::close() }}
        @else
                                <!-- Cookie Alert -->
                                    <div class="container ">
                                        <div class="alert bg-white w-lg-80 border shadow-sm mx-auto" role="alert">
                                            <h4 class="text-success">Berhasil !</h4>
                                            <p class="small">
                                                <span class="font-weight-bold">Selamat</span>
                                                 Permintaan anda berhasil dikirim, informasi selanjutnya akan dikirim melalui email yang anda daftarkan.
                                                <br>
                                                 <strong>Pastikan untuk memeriksa folder spam anda.</strong>
                                            </p>

                                            <div class="row align-items-sm-center">
                                                <div class="col-sm-8 mb-3 mb-sm-0">

                                                </div>

                                                <div class="col-sm-4 text-sm-right">
                                                    <a href="{{route('layanan-online')}}" type="button" class="btn btn-sm btn-primary transition-3d-hover">Ok!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Cookie Alert -->

                            @endif
        <!-- End Contacts Form -->
      </div>
    </div>
    <!-- End Contact Form Section -->
</div>
</div>
</div>

    </body>
  </html>
  </div>
  </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection
  


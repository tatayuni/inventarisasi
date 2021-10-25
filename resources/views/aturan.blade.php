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
        <form method="POST" action="{{route('pendaftaran.buat')}}" enctype="multipart/form-data" class="js-validate">
        @csrf
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Nama Pengelola (Penanggungjawab)</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Anda" aria-label="Nama Anda" required
                       data-msg="Mohon Masukkan Nama Anda.">
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">OPD</label>
                <input type="text" class="form-control" name="opd" placeholder="Nama OPD" aria-label="Jeff Fisher" required
                       data-msg="Mohon masukkan nama opd.">
              </div>
            </div>

             <!-- Input -->
             <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Email Pengelola(Penanggungjawab)</label>
                <input type="email" class="form-control" name="email" placeholder="Email Pengelola" aria-label="jackwayley@gmail.com" required
                       data-msg="Mohon masukkan email Anda.">
              </div>
            </div>
            <!-- End Input -->

           <!-- Input -->
           <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Whatsapp Pengelola(Penanggungjawab)</label>
                <input type="text" class="form-control" name="wa" placeholder="Nomor Whatsapp " aria-label="" required
                       data-msg="Mohon masukkan nomor Whatsapp Anda.">
              </div>
            </div>
            <!-- End Input -->
            </div>

          <!-- Input -->
          <div class="js-form-message mb-3">
            <label class="input-label">Deskripsi Aplikasi (Sistem)</label>
            <div class="input-group">
              <textarea class="form-control" rows="4" name="deskripsi" placeholder="Deskripsi aplikasi" aria-label="Hi there, I would like to ..." required
                        data-msg="Mohon untuk diisi."></textarea>
            </div>
          </div>
          <!-- End Input -->

           <!-- Input -->
           <div class="js-form-message mb-3">
            <label class="input-label">Alur Aplikasi (Sistem)</label>
            <div class="input-group">
              <textarea class="form-control" rows="4" name="alur" placeholder="Alur aplikasi" aria-label="Hi there, I would like to ..." required
                        data-msg="Mohon untuk diisi."></textarea>
            </div>
          </div>
          <!-- End Input -->

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
            <p class="small">We'll get back to you in 1-2 business days.</p>
          </div>
        </form>
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
        <form method="POST" action="{{route('pendaftaran.store')}}" enctype="multipart/form-data" class="js-validate">
        @csrf
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Nama Pengelola (Penanggungjawab)</label>
                <input type="text" class="form-control" name="nama_pengelola" placeholder="Nama Anda" required
                       data-msg="Mohon masukkan nama Anda.">
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Nama Subdomain</label>
                <input type="text" class="form-control" name="subdomain" placeholder="aplikasianda.wonosobokab.go.id atau aplikasianda.wonosobokab.com" required
                       data-msg="Mohon masukkan nama subdomain.">
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">OPD</label>
                <input type="text" class="form-control" name="nama_opd" placeholder="Nama OPD" required
                       data-msg="Mohon masukkan nama opd.">
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Versi PHP</label>
                <input type="text" class="form-control" name="php" placeholder="Rekomendasi versi php >=7.0" required
                       data-msg="Mohon masukkan versi PHP.">
              </div>
            </div>
            <!-- End Input -->

             <!-- Input -->
             <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Email Pengelola (Penanggungjawab)</label>
                <input type="email" class="form-control" name="email_pengelola" placeholder="Email Anda" required
                       data-msg="Mohon masukkan email Anda.">
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Versi Database</label>
                <input type="text" class="form-control" name="versi_db" placeholder="versi database MySQL, PgSQL, MongoDB" required
                       data-msg="Mohon masukkan versi database.">
              </div>
            </div>
            <!-- End Input -->

            <div class="w-100"></div>

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Whatsapp Pengelola (Penanggungjawab)</label>
                <input type="text" class="form-control" name="wa_pengelola" placeholder="Nomor Whatsapp Anda" required
                       data-msg="Mohon masukkan nomor  Whatsapp.">
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-4">
              <div class="js-form-message">
                <label class="input-label">Bahasa Pemrograman</label>
                <input type="text" class="form-control" name="bahasa_pemrograman" placeholder="Bahasa Pemrograman" required
                       data-msg="Mohon masukkan bahasa pemrograman.">
              </div>
            </div>
            <!-- End Input -->
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
            <p class="small">We'll get back to you in 1-2 business days.</p>
          </div>
        </form>
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
  


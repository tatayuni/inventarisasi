@extends('layouts.main')

@section('container')
     


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Album example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

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

  <section class="py-10 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-8 col-md-9 mx-auto">
        <h3 class="fw-light">Inventarisasi Aplikasi OPD</h3>
        <p class="lead text-muted">Sistem Informasi Aplikasi Organisasi Perangkat Daerah.</p>
        <p>
          <a href="/login" class="btn btn-primary my-2">Lihat Dokumen</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <image class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('template/assets/image/smart.jpg')}}"xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt=""><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></image>
            <div class="card-body">
              <p class="card-text">Smartcity Kabupaten Wonosobo.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/login" class="btn btn-sm btn-outline-secondary">Lihat</a>
                  <a href="/login" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <image class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('template/assets/image/news.jpg')}}"xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt=""><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></image>

            <div class="card-body">
              <p class="card-text">Wonosobo News.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/login" class="btn btn-sm btn-outline-secondary">Lihat</a>
                  <a href="/login" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <image class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('template/assets/image/sds.jpg')}}"xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt=""><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></image>

            <div class="card-body">
              <p class="card-text">Single Data System.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/login" class="btn btn-sm btn-outline-secondary">Lihat</a>
                  <a href="/login" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>




@endsection
  


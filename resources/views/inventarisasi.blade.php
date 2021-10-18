@extends('layouts.main')

@section('container')

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
      <div class="container d-lg-flex align-items-lg-center space-top-0 space-lg-0 min-vh-lg-100"><!-- Content -->
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Aplikasi</th>
      <th scope="col">Nama OPD</th>
      <th scope="col">Domain Aplikasi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>LPSE</td>
      <td></td>
      <td>lpse.wonosobokab.go.id</td>
      <td> <a href="/details"><button type="button" class="badge bg-primary border-0">details</button></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>APRIZ</td>
      <td>DPMPTSP</td>
      <td>apriz.wonosobokab.go.id</td>
      <td> <a href="/details"><button type="button" class="badge bg-primary border-0">details</button></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>e-presensi</td>
      <td></td>
      <td>presensi.wonosobokab.go.id</td>
      <td> <a href="/details"><button type="button" class="badge bg-primary border-0">details</button></a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Dapodik</td>
      <td></td>
      <td>dapo.kemdikbud.go.id</td>
      <td> <a href="/details"><button type="button" class="badge bg-primary border-0">details</button></a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>MT Menara</td>
      <td>Diskominfo</td>
      <td>mt-wonosobo.wonosobokab.go.id</td>
      <td> <a href="/details"><button type="button" class="badge bg-primary border-0">details</button></a></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Jaringan Informasi dan Dokumentasi Hukum</td>
      <td>Bagian Hukum Setda</td>
      <td>jdih.wonosobokab.go.id</td>
      <td> <a href="/details"><button type="button" class="badge bg-primary border-0">details</button></a></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Agenda Surat Menyurat Bagian Humas & Umum Setda</td>
      <td>Bagian Humas dan Umum Setda</td>
      <td>bagianumumtu.wonosobokab.go.id</td>
      <td> <a href="/details"><button type="button" class="badge bg-primary border-0">details</button></a></td>
    </tr>
  </tbody>
</table>
    </div>
    <!-- End Hero Section -->

      </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection
  


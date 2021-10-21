@extends('layouts.main_admin')
@section('container')
      <!-- BEGIN: Content-->
      <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Basic Forms</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                                </li>
                                <li class="breadcrumb-item active">Basic Forms
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested ">
                        <button class="btn btn-info round box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-round-controls">Complaint Form</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                    {{Form::model($data,['route' => ['inventarisasi.update', $data->id], 'method' => 'patch', 'class' => 'form form-horizontal','files' => true])}}
                                            <div class="form-body">

                                                <div class="form-group">
                                                    <label for="complaintinput1">Nama Aplikasi</label>
                                                    {{Form::text('nama_aplikasi', null, ['class' => 'form-control round ', 'placeholder' => 'Nama Aplikasi'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Nama OPD</label>
                                                    {{Form::text('nama_opd', null, ['class' => 'form-control round ', 'placeholder' => 'Nama OPD'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Aplikasi pendukung tugas dan fungsi utama OPD atau penunjang</label>
                                                    {{Form::text('sifat_aplikasi', null, ['class' => 'form-control round ', 'placeholder' => 'Aplikasi pendukung tugas dan fungsi utama OPD atau penunjang'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput5">Penggunaan Aplikasi</label>
                                                    {{Form::textarea('fungsi_aplikasi', null, ['class' => 'form-control round ', 'rows' => '5', 'placeholder' => 'Domain Aplikasi'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Integrasi dengan aplikasi lain (yang sudah dilakukan/rencana)</label>
                                                    {{Form::text('integrasi_aplikasi', null, ['class' => 'form-control round ', 'placeholder' => 'Integrasi dengan aplikasi lain (yang sudah dilakukan/rencana)'])}}
                                                </div> 

                                                <div class="form-group">
                                                    <label for="complaintinput2">Jenis Aplikasi (desktop, Web, Mobile aplikasi)</label>
                                                    {{Form::text('jenis_aplikasi', null, ['class' => 'form-control round ', 'placeholder' => 'Jenis Aplikasi (desktop, Web, Mobile aplikasi)'])}}
                                                </div> 

                                                <div class="form-group">
                                                    <label for="complaintinput2">Frekuensi penggunaan  (harian, Mingguan, Bulanan, Semester,Tahunan))</label>
                                                    {{Form::text('frekuensi_penggunaan', null, ['class' => 'form-control round ', 'placeholder' => 'Integrasi dengan aplikasi lain (yang sudah dilakukan/rencana)'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Lokasi Server</label>
                                                    {{Form::text('lokasi_server', null, ['class' => 'form-control round ', 'placeholder' => 'Lokasi Server'])}}
                                                </div>
                                                <div class="form-group">
                                                    <label for="complaintinput2">Domain Aplikasi</label>
                                                    {{Form::text('domain_aplikasi', null, ['class' => 'form-control round ', 'placeholder' => 'Domain Aplikasi'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput5">Kendala penggunaan aplikasi saat ini</label>
                                                    {{Form::textarea('kendala', null, ['class' => 'form-control round ', 'rows' => '5', 'placeholder' => 'Kendala penggunaan aplikasi saat ini'])}}
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
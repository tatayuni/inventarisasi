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

                                    {{Form::model($data,['route' => ['pendaftaran.update', $data->id], 'method' => 'patch', 'class' => 'form form-horizontal','files' => true])}}
                                            <div class="form-body">

                                                <div class="form-group">
                                                    <label for="complaintinput1">Nama Pengelola (Penanggungjawab)</label>
                                                    {{Form::text('nama_pengelola', null, ['class' => 'form-control', 'placeholder' => 'Nama Anda'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">OPD</label>
                                                    {{Form::text('nama_opd', null, ['class' => 'form-control', 'placeholder' => 'Nama OPD'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Email Pengelola(Penanggungjawab)</label>
                                                    {{Form::email('email_pengelola', null, ['class' => 'form-control', 'placeholder' => 'Email Pengelola'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput5">Whatsapp Pengelola(Penanggungjawab)</label>
                                                    {{Form::text('wa_pengelola', null, ['class' => 'form-control', 'placeholder' => 'Nomor Whatsapp'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Nama Subdomain</label>
                                                    {{Form::text('subdomain', null, ['class' => 'form-control', 'placeholder' => 'aplikasianda.wonosobokab.go.id atau aplikasianda.wonosobokab.com'])}}
                                                </div> 

                                                <div class="form-group">
                                                    <label for="complaintinput2">Versi PHP</label>
                                                    {{Form::text('php', null, ['class' => 'form-control', 'placeholder' => 'Rekomendasi versi php >=7.0'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Versi Database</label>
                                                    {{Form::text('versi_db', null, ['class' => 'form-control', 'placeholder' => 'versi database MySQL, PgSQL, MongoDB'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Bahasa Pemrograman</label>
                                                    {{Form::text('bahasa_pemrograman', null, ['class' => 'form-control', 'placeholder' => 'Bahasa Pemrograman'])}}
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
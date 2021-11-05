@extends('layouts.main_admin')
@section('container')
      <!-- BEGIN: Content-->
      <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Edit Dokumen</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Layanan Online</a>
                                </li>
                                <li class="breadcrumb-item active">Edit Dokumen
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

                                    {{Form::model($data,['route' => ['layananonline.update', $data->id], 'method' => 'patch', 'class' => 'form form-horizontal','files' => true])}}
                                            <div class="form-body">

                                                <div class="form-group">
                                                    <label for="complaintinput1">Nama Pengelola (Penanggungjawab)</label>
                                                    {{Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Anda'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">OPD</label>
                                                    {{Form::text('opd', null, ['class' => 'form-control', 'placeholder' => 'Nama OPD'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Email Pengelola(Penanggungjawab)</label>
                                                    {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Pengelola'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput5">Whatsapp Pengelola(Penanggungjawab)</label>
                                                    {{Form::text('wa', null, ['class' => 'form-control', 'placeholder' => 'Nomor Whatsapp'])}}
                                                </div>

                                                <div class="form-group">
                                                    <label for="complaintinput2">Deskripsi Aplikasi (Sistem)</label>
                                                    {{Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Deskripsi aplikasi'])}}
                                                </div> 

                                                <div class="form-group">
                                                    <label for="complaintinput2">Alur Aplikasi (Sistem)</label>
                                                    {{Form::textarea('alur', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Deskripsi aplikasi'])}}
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
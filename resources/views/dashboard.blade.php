@extends('layouts.main_admin')
@section('container')
  <!-- BEGIN: Content-->
  <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Dashboard</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                </li>
                            </ul>
                        </li>
                    </ul> 
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
              
                  <section id="ordering">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Domain dan Subdomain Website Resmi OPD dan Layanan Pengajuan Surat Online</h4>
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
                                <div class="row align-items-md-stretch">
                                    <div class="col-md-6 mb-3">
                                        <div class="h-100 p-5 text-white bg-info rounded-3">
                                        <h2>Data Inventarisasi</h2>
                                        <p>Daftar Inventarisasi Aplikasi Organisasi Perangkat Daerah di lingkungan Kabupaten Wonosobo.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="h-100 p-5 text-white bg-info rounded-3">
                                        <h2>Layanan Online</h2>
                                        <p>Pengajuan Surat Permohonan pembuatan aplikasi secara online.</p>
                                        </div>
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
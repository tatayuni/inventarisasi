@extends('layouts.main_admin')
@section('container')
  <!-- BEGIN: Content-->
  <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Data Inventarisasi</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Data Inventarisasi</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <a href="{{route('pictureinventarisasi.create')}}" class="btn btn-info round box-shadow-2 px-2 mb-1" id="btnGroupDrop1" aria-haspopup="true" aria-expanded="false"><i class="ft-file-plus icon-left"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            @if(session('status'))
            <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Berhasil!</strong>  {{ session('status') }}
            </div>
            @endif
            
            <div class="content-body">
              
                  <section id="ordering">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <h4 class="card-title">Data Domain dan Subdomain Website Resmi OPD di Lingkungan Pemerintah Kabupaten Wonosobo</h4>
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
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered devan">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Aplikasi</th>
                                                        <th>URL</th>
                                                        <th>Gambar</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
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

@push('js')
<script type="text/javascript">			
		var table = $('.devan').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('pictureinventarisasi.list') }}",
        columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nama_aplikasi',  },
                    {data: 'url', },
                    {data: 'image', },
					    {
						data: 'action', 
						name: 'action', 
						orderable: true, 
						searchable: true
                         },
        ]
    });
</script>
@endpush
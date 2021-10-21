<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventarisasi;
use DataTables;

class InventarisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventarisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventarisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Inventarisasi::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Inventarisasi::find($id);

        return view('inventarisasi.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getInventarisasi(Request $request)
    {
        $data = Inventarisasi::orderBy('nama_aplikasi', 'asc')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div class="d-flex justify-content-center">
                    <a href="' . route('inventarisasi.show', $data->id) . ' "  data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="ft-edit text-success"></i></a>
                    <a href="' . route('inventarisasi.destroy', $data->id) . ' " class="delete-data-table" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="ft-trash-2 ml-1 text-warning"></i></a>
                    </div>';
                    return $actionBtn;
                }
            )
            ->editColumn('nama_aplikasi', function ($data) {
                return $data->nama_aplikasi;
            })

            ->editColumn('nama_opd', function ($data) {
                return $data->nama_opd;
            })
            ->editColumn('sifat_aplikasi', function ($data) {
                return $data->sifat_aplikasi;
            })
            ->editColumn('fungsi_aplikasi', function ($data) {
                return $data->fungsi_aplikasi;
            })
            ->editColumn('integrasi_aplikasi', function ($data) {
                return $data->integrasi_aplikasi;
            })
            // ->editColumn('jenis_aplikasi', function ($data) {
            //     return $data->jenis_aplikasi;
            // })
            // ->editColumn('frekuensi_penggunaan', function ($data) {
            //     return $data->frekuensi_penggunaan;
            // })
            // ->editColumn('lokasi_server', function ($data) {
            //     return $data->lokasi_server;
            // })
            // ->editColumn('domain_aplikasi', function ($data) {
            //     return $data->domain_aplikasi;
            // })
            // ->editColumn('kendala', function ($data) {
            //     return $data->kendala;
            // })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}

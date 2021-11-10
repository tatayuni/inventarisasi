<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sudahpunya;
use DataTables;
use Session;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendaftaran.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = Sudahpunya::create(
            [
                'no' => gen_no_tiket_sudah_punya(),
                'nama_pengelola' => $request->nama_pengelola,
                'subdomain' => $request->subdomain,
                'nama_opd' => $request->nama_opd,
                'php' => $request->php,
                'email_pengelola' => $request->email_pengelola,
                'versi_db' => $request->versi_db,
                'wa_pengelola' => $request->wa_pengelola,
                'bahasa_pemrograman' => $request->bahasa_pemrograman,
                'status' => 'STATUS_ST_01'
            ]
        );
        Session::flash('keterangan', 'Data berhasil di simpan');
        return redirect(route('layanan-online'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Sudahpunya::find($id);

        return view('pendaftaran.show', compact('data'));
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
        Sudahpunya::find($id)->update([
            'status'=>$request->status,
            'approval_by' => auth()->user()->id,
        ]);
        Session::flash('status', 'Data berhasil di update');
        return redirect(route('pendaftaran.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sudahpunya::destroy($id);
    }

    public function getSudahpunya(Request $request)
    {
        $data = Sudahpunya::get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div class="d-flex justify-content-center">
                    <a href="' . route('pendaftaran.show', $data->id) . ' "  data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="ft-edit text-success"></i></a>
                    <a href="' . route('pendaftaran.destroy', $data->id) . ' " class="delete-data-table" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="ft-trash-2 ml-1 text-warning"></i></a>
                    </div>';
                    return $actionBtn;
                }
            )
            ->editColumn('nama', function ($data) {
                return $data->nama_pengelola;
            })

            ->editColumn('no', function ($data) {
                return $data->no;
            })
            ->editColumn('email', function ($data) {
                return $data->email_pengelola;
            })
            ->editColumn('status', function ($data) {
                if($data->status == 'STATUS_ST_01' ){
                    return 'Menunggu Persetujuan';
                } else if($data->status == 'STATUS_ST_02'){
                    return 'Disetujui';
                } else if($data->status == 'STATUS_ST_03'){
                    return 'Ditolak';
                } else {
                    return 'Sukses';
                }
                return $data->status;
            })

            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}

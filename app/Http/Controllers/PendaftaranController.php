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
        $data = Sudahpunya::create($request->all());
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
        //
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
            ->editColumn('nama_pengelola', function ($data) {
                return $data->nama_pengelola;
            })

            ->editColumn('email_pengelola', function ($data) {
                return $data->email_pengelola;
            })
            ->editColumn('nama_opd', function ($data) {
                return $data->nama_opd;
            })
            ->editColumn('wa_pengelola', function ($data) {
                return $data->wa_pengelola;
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}

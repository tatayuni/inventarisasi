<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Belumpunya;
use DataTables;
use Session;

class LayananOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layananonline.index');
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
        $data = Belumpunya::create([
            'no' => gen_no_tiket_belum_punya(),
            'nama' => $request->nama,
            'opd' => $request->opd,
            'email' => $request->email,
            'wa' => $request->wa,
            'deskripsi' => $request->deskripsi,
            'alur' => $request->alur,
            'status' => 'STATUS_ST_01'
        ]);
        if($data){
            Session::flash('keterangan', 'Data berhasil di simpan');
        }
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
        $data = Belumpunya::with(['status'])->find($id);

        return view('layananonline.show', compact('data'));
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
        Belumpunya::find($id)->update([
            'status'=>$request->status,
            'approval_by' => auth()->user()->id,
        ]);

        Session::flash('status', 'Data berhasil di update');
        return redirect(route('layananonline.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Belumpunya::destroy($id);
    }

    public function getBelumpunya(Request $request)
    {
        $data = Belumpunya::orderBy('created_at', 'asc')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div class="d-flex justify-content-center">
                    <a href="' . route('layananonline.show', $data->id) . '"  data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="ft-edit text-success"></i></a>
                    <a href="' . route('layananonline.destroy', $data->id) . '" class="delete-data-table" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="ft-trash-2 ml-1 text-warning"></i></a>
                    </div>';
                    return $actionBtn;
                }
            )
            ->editColumn('nama', function ($data) {
                return $data->nama;
            })

            ->editColumn('no', function ($data) {
                return $data->no;
            })
            ->editColumn('email', function ($data) {
                return $data->email;
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

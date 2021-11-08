<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventarisasi;
use DataTables;
use Session;

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
        return view('inventarisasi.index');
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
        // Inventarisasi::find($inventarisasi->whereSlug($id)->first()->id)
        // ->update([
        //     'nama_aplikasi' => $request->nama_aplikasi,
        //     'nama_opd' => $request->nama_opd
        // ]);
        // pertama tulis modelnya dulu, gini? iya nah model kan merujuk ke tabel database nah di tabel inventarisasi mau diapain kalo di update? diberbaharui data yg baru wlwl pertama apa yg dicari ? find table inventarisasi? iya terus ? cari idnya? trs nama tablenya cantumin yg bisa diupdate klo kaya id jgn diupdate jd isinya aja gitu kan iya betul coba gimana nulisnya ? whereslug itu wajib dicantumin? itu buat apa engga wajib itu cuma tambahan aja soalnya kemaren kan updatenya idnya tu slug bukan id nomor ooh iya mas bentar coba firstnya gausah dulu langsung id kita cek ya bener ga yng mau diubah id 7 ? iyaa bener mas berarti gimana nulisnya ? kasih script ->update biar jalanain updatenya trs diisi mau apa aja yg bisa diupdate? iya betul tapi yg find() belum betul coba lanjutin kirain$inventarisasi itu tabelnya yg dicari dulu betul mas? iya lanjutin sampai selesai coba, udah mas devan
        Inventarisasi::find($id)->update([
            'nama_aplikasi'=>$request->nama_aplikasi,
            'nama_opd'=>$request->nama_opd,
            'sifat_aplikasi'=> $request->sifat_aplikasi,
            'fungsi_aplikasi'=>$request->fungsi_aplikasi,
            'integrasi_aplikasi'=>$request->integrasi_aplikasi,
            'jenis_aplikasi'=>$request->jenis_aplikasi,
            'frekuensi_penggunaan'=>$request->frekuensi_penggunaan,
            'lokasi_server'=>$request->lokasi_server,
            'domain_aplikasi'=>$request->domain_aplikasi,
            'kendala'=>$request->kendala
        ]);

        Session::flash('status', 'Data berhasil di update');
        return redirect(route('inventarisasi.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Inventarisasi::destroy($id);
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

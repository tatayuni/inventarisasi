<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PictureInventarisasi;
use DataTables;
use Session;

class PictureInventarisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('picture_inventarisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('picture_inventarisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // tidak ada foto
       if ($request->image == null) {
        $a = PictureInventarisasi::create([
            'image' => null,
            'nama_aplikasi' => $request->nama_aplikasi,
            'url' => $request->url,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('pictureinventarisasi');
    } else {
        //  ada foto
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('image');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img_upload/';
        $file->move($tujuan_upload, $nama_file);
        // dd($file);
        $a = PictureInventarisasi::create([
            'image' => $nama_file,
            'nama_aplikasi' => $request->nama_aplikasi,
            'url' => $request->url,
            'keterangan' => $request->keterangan,
        ]);
        Session::flash('status', 'Data berhasil di tambah');
        return redirect('pictureinventarisasi');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PictureInventarisasi::find($id);

        return view('picture_inventarisasi.show', compact('data'));
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
        // tidak ada foto
       if ($request->image == null) {
        $a = PictureInventarisasi::update([
            'nama_aplikasi' => $request->nama_aplikasi,
            'url' => $request->url,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('pictureinventarisasi');
    } else {
        $data = PictureInventarisasi::find($id);
        // hapus file
        File::delete('img_upload/' . $data->image);
        //  ada foto
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('image');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img_upload/';
        $file->move($tujuan_upload, $nama_file);
        $data->update(
            [
                'image' => $nama_file,
                'nama_aplikasi' => $request->nama_aplikasi,
                'url' => $request->url,
                'keterangan' => $request->keterangan,
            ]
        );
        Session::flash('status', 'Data berhasil di update');
        return redirect('pictureinventarisasi');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PictureInventarisasi::destroy($id);
    }

    public function getPicture(Request $request)
    {
        $data = PictureInventarisasi::get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div class="d-flex justify-content-center">
                    <a href="' . route('pictureinventarisasi.show', $data->id) . ' "  data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="ft-edit text-success"></i></a>
                    <a href="'. route('pictureinventarisasi.destroy', $data->id) .'" class="delete-data-table" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="ft-trash-2 ml-1 text-warning"></i></a>
                    </div>';
                    return $actionBtn;
                }
            )
            ->editColumn('nama_aplikasi', function ($data) {
                return $data->nama_aplikasi;
            })

            ->editColumn('url', function ($data) {
                return $data->url;
            })
            ->editColumn('image', function ($data) {
                return '<a href="img_upload/'.$data->image.'" target="_blank"><img src="/img_upload/'.$data->image.'" style="height:50px;"></a>';
            })
            ->rawColumns(['action', 'status','image'])
            ->make(true);
    }
}

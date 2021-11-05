<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PictureInventarisasi;

class PictureInventarisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('picture_inventarisasi.create');
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
}

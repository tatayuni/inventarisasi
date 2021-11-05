<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Belumpunya;
use App\Models\Sudahpunya;

class PantauanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

    public function pantauan(Request $request)
    {   $title= 'Pantauan';
        $data = '';
        if($request->filled('q')){
            $a = substr($request->q, 0, 5);
                switch ($a) {
                    case "TKTBL":
                        $data = Belumpunya::whereNo($request->q)->first();
                        break;
                    case "TKTSD":  
                        $data = Sudahpunya::whereNo($request->q)->first();
                        break;
                    }
        }
        return view('pantauan', compact('data', 'title'));
    }
}

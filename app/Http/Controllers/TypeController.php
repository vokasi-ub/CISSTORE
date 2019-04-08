<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type;
use Illuminate\Support\Facades\DB;
class TypeController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mencari data
        if ($request->has('cari')) {
            $type = \App\type::where('type_barang','LIKE','%'.$request->cari.'%')->get();
        } else {
            $type = type::all();
        }
        return view('dashboard.type', compact('type'));
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = type::where('nama_type', 'LIKE', '%' . $query . '%')->paginate(10);
    //     return view('dashboard.result', compact('hasil', 'query'));
    // }

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
     // insert data ke table type
        DB::table('type')->insert([
        'type_barang' => $request->type_barang,
        
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now()
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/type');
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
        $output = 'Daftar type';
        $type = type::get();
        return view('show', array(
          'type' => $output,
          'type' => $type
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $type = DB::table('type')->where('id_type',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('type.edit',['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request)
{
    // update data pegawai
    DB::table('type')->where('id_type',$request->id_type)->update([
        'type_barang' => $request->type_barang,
        
         
        'updated_at' => \Carbon\Carbon::now()
   
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/type');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('type')->where('id_type', $id)->delete();
            return redirect('/type');
    }

}
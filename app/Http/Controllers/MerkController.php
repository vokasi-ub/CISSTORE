<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\merk;
use Illuminate\Support\Facades\DB;
class MerkController extends Controller
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
            $merk = \App\merk::where('merk','LIKE','%'.$request->cari.'%')->get();
        } else {
            $merk = merk::all();
        }
        return view('dashboard.merk', compact('merk'));
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = kategori::where('nama_kategori', 'LIKE', '%' . $query . '%')->paginate(10);
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
     // insert data ke table kategori
        DB::table('merk')->insert([
        'merk' => $request->merk,
       
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now()
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/merk');
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
        $output = 'Daftar Merk';
        $merk = merk::get();
        return view('show', array(
          'merk' => $output,
          'merk' => $merk
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
    $merk = DB::table('merk')->where('id_merk',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('merk.edit',['merk' => $merk]);
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
    DB::table('merk')->where('id_merk',$request->id_merk)->update([
        'merk' => $request->merk,
       
         
        'updated_at' => \Carbon\Carbon::now()
   
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/merk');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('merk')->where('id_merk', $id)->delete();
            return redirect('/merk');
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use Illuminate\Support\Facades\DB;
class kategoriController extends Controller
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
            $kategori = \App\Kategori::where('nama_kategory','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kategori = kategori::all();
        }
        return view('dashboard.kategori', compact('kategori'));
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
        DB::table('kategori')->insert([
        'nama_kategory' => $request->nama_kategory,
        'slug' => $request->slug,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now()
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/kategori');
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
        $output = 'Daftar Kategori';
        $kategori = kategori::get();
        return view('show', array(
          'kategori' => $output,
          'kategori' => $kategori
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
    $kategori = DB::table('kategori')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('dashboard.edit',['kategori' => $kategori]);
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
    DB::table('kategori')->where('id',$request->id)->update([
        'nama_kategory' => $request->nama_kategory,
        'slug' => $request->slug,
         
        'updated_at' => \Carbon\Carbon::now()
   
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/kategori');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id', $id)->delete();
            return redirect('/kategori');
    }

}
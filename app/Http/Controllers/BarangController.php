<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use Illuminate\Support\Facades\DB;
class BarangController extends Controller
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
            $barang = \App\barang::where('nama_barang','LIKE','%'.$request->cari.'%')->get();
            $merk = DB::table('merk')->get();
            $type = DB::table('type')->get();
        } else {
            $merk = DB::table('merk')->get();
            $type = DB::table('type')->get();
           
           $barang = DB::table('barang')
            ->join('merk', 'barang.id_merk', '=', 'merk.id_merk')
            ->join('type', 'barang.id_type', '=', 'type.id_type')
            ->select('barang.*', 'merk.*', 'type.*')
            ->get();
        }
        return view('dashboard.barang', compact('barang','merk','type'));
    }


    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = barang::where('nama_barang', 'LIKE', '%' . $query . '%')->paginate(10);
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
     // insert data ke table barang
        DB::table('barang')->insert([
        'id_type' => $request->id_type,
        'id_merk' => $request->id_merk,
        'nama_barang' => $request->nama_barang,
        'asal_produksi' => $request->asal_produksi,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now()
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/barang');
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
        $output = 'Daftar barang';
        $barang = barang::get();
        return view('show', array(
          'barang' => $output,
          'barang' => $barang
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
    $barang = DB::table('barang')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('barang.edit',['barang' => $barang]);
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
    DB::table('barang')->where('id',$request->id)->update([
        'id_type' => $request->id_type,
        'id_merk' => $request->id_merk,
        'nama_barang' => $request->nama_barang,
        'asal_produksi' => $request->asal_produksi,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
        'stok' => $request->stok,
         
        'updated_at' => \Carbon\Carbon::now()
   
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/barang');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barang')->where('id', $id)->delete();
            return redirect('/barang');
    }

}
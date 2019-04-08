@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data barang</h1>
<br>
     
    
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              <a href="barang"> Lihat Semua Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>id</th>
                <th>id_type</th>
                <th>id_merk</th>
                <th>nama_barang</th>
                <th>asal_produksi</th>
                <th>deskripsi</th>
                <th>harga</th>
                <th>stok</th>
                <th>Tanggal_Input_Date</th>
                <th>Opsi</th></tr>
             @foreach($barang as $barang)
                 <tr>
                  <td>{{$barang->id}}</td>
                  <td>{{$barang->id_type}}</td>
                  <td>{{$barang->id_merk}}</td>
                  <td>{{$barang->nama_barang}}</td>
                  <td>{{$barang->asal_produksi}}</td>
                  <td>{{$barang->deskripsi}}</td>
                  <td>{{$barang->harga}}</td>
                  <td>{{$barang->stok}}</td>
                   <td>{{$barang->tanggal_input_date}}</td>
                     <td><a href="">Lihat</a> | <a href="">Edit</a> | <a href="">Hapus</a></td>
    </tr>
                   @endforeach
            </tbody>
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection
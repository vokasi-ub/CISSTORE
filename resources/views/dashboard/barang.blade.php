@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>CISSTORE</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/barang" method="GET">

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Search</button>
                </div>
                <!-- /btn-group -->
                
                <input type="text" class="form-control" name="cari" placeholder="Cari Data">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">List Data barang</h3>
       
            </div>

            <div class="box-body">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Create Data
              </button><br><br>

          
          <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Info Modal</h4>
              </div>
                <form class="form-horizontal" action="/inputdata/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Type Barang</label>
                   <div class="col-sm-10">
                  <select class="form-control" name="id_type">
                  @foreach ($type as $row)
                    <option value="{{ $row->id_type }}"> {{$row->type_barang }} </option>
                  @endforeach
                   
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Merk</label>
                   <div class="col-sm-10">
                  <select class="form-control" name="id_merk">
                   @foreach ($merk as $row2)
                    <option value="{{ $row2->id_merk }}"> {{$row2->merk }} </option>
                  @endforeach

                  </select>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">nama_barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang" placeholder="nama_barang">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">asal_produksi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="asal_produksi" placeholder="asal_produksi">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">deskripsi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">harga</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" placeholder="harga">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">stok</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" placeholder="stok">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                   
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
             
              <!-- /.box-footer -->
            
              <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">save</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
               <th>ID</th>
                <th>Id</th>
                <th>type_barang</th>
                <th>merk</th>
                <th>nama_barang</th>
                <th>asal_produksi</th>
                <th>deskripsi</th>
                <th>harga</th>
                <th>stok</th>
                <th>Tanggal Input Date</th>
                 <th>Tanggal_updata</th>
                <th>Opsi</th></tr>

                 <?php $no=1; ?>
             @foreach($barang as $barang)
                 <tr>
                 <th>{{$no++}}</th>

                 <td>{{$barang->id}} </td>
                  <td>{{$barang->type_barang}}</td>
                  <td>{{$barang->merk}}</td>
                  <td>{{$barang->nama_barang}}</td>
                  <td>{{$barang->asal_produksi}}</td>
                  <td>{{$barang->deskripsi}}</td>
                  <td>{{$barang->harga}}</td>
                  <td>{{$barang->stok}}</td>
                   <td>{{$barang->created_at}}</td>
                   <td>{{$barang->updated_at}}</td>
                     <td>  <a href="/barangedit/edit/{{ $barang->id }}">Edit</a> | <a href="/hapus/destroy/{{ $barang->id }}">Hapus</a></td>
    </tr>
  @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  
    <!-- /.content -->
@endsection
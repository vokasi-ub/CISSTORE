@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data barang</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($barang as $p)
            <form class="form-horizontal" action="/databarang/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id_type</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_type" value="{{ $p->id_type }}" placeholder="id_type">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">id_merk</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_merk" value="{{ $p->id_merk }}" placeholder="id_merk">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">nama_barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang" value="{{ $p->nama_barang }}" placeholder="nama_barang">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">asal_produksi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="asal_produksi" value="{{ $p->asal_produksi }}" placeholder="asal_produksi">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">deskripsi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi" value="{{ $p->deskripsi }}" placeholder="deskripsi">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" value="{{ $p->harga }}" placeholder="harga">
                  </div>
                </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">stok</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" value="{{ $p->stok }}" placeholder="stok">
                  </div>
                </div>


              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection
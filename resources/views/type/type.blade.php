@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data type</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/type" method="GET">

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
              <h3 class="box-title">List Data Type</h3>
       
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
                  <label for="inputPassword3" class="col-sm-2 control-label">type_barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="type_barang" placeholder="type_barang">
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
                <th>Id_type</th>
                <th>type_barang</th>
                
                <th>Tanggal Input Data</th>
                 <th>Tanggal_update</th>
                <th>Opsi</th></tr>

             @foreach($type as $type)
                 <tr>
                  <td>{{$type->id_type}}</td>
                  <td>{{$type->type}}</td>
                  
                   <td>{{$type->created_at}}</td>
                   <td>{{$type->updated_at}}</td>
                     <td>  <a href="/typeedit/edit/{{ $type->id_type }}">Edit</a> | <a href="/hapus/destroy/{{ $type->id_type }}">Hapus</a></td>
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
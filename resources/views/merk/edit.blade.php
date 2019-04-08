@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Merk</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($merk as $p)
            <form class="form-horizontal" action="/datamerk/updatemerk" method="post">
               {{ csrf_field() }}
                <input type="hidden" name="id_merk" value="{{ $p->id_merk }}"> <br/>
               
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">merk</label>

                  <div class="col-sm-10">
                    <input merk="text" class="form-control" name="merk" value="{{ $p->merk }}" placeholder="merk">
                  </div>
                </div>
             


              <!-- /.box-body -->
              <div class="box-footer">
                <button merk="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button merk="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection
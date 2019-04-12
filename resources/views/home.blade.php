@extends('template.master')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header"><h1>CISSTORE</h1></div>
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    by Citra Dewi
                </div>
               
                <center>
                    <img style="width:130%;" src="{{asset('tema/dist/img/HP.jpg')}}">
                </center>
            </div>
        </div>
    </div>
</div>
@endsection

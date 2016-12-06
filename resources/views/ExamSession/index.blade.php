@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Select Subject</div>
                <div class="panel-body">
                    <center>
                  <a href="{{url('/exm/1')}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>History
                  </a>
                  <a href="{{url('/exm/1')}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Economics
                  </a>
                  <a href="{{url('/exm/1')}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Mathematics
                  </a>
                  <a href="{{url('/exm/1')}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Some Other
                  </a>
              </center>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a href="{{url('/exam')}}" class="btn btn-primary btn-lg">
                      <span class="glyphicon glyphicon-star" aria-hidden="true" ></span>Exam Session
                    </a>
                  <a href="{{url('/studymaterials')}}" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true" ></span> Study Material
                  </a>
                  <button type="button" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> View Attended Test
                  </button>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

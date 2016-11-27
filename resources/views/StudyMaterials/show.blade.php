@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Study Materials for {{$sub}}</div>
                <div class="panel-body">
                  @foreach($subject as $sub)
                  <a href="{{url('/showPDF',$sub->id)}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>{{$sub->chapter}}
                  </a>
                  @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

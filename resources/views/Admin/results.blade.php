@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-0">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard - Score Card</div>
                <div class="panel-body">
                    @foreach($results as $result)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <center><h1><span class="glyphicon glyphicon-user"></span></h1>
                            <div class="caption">
                                <h3>{{$result->user->name}}</h3>
                                <p>Subject : {{$result->subject}}</p>
                                <p>Score : {{$result->mark}}</p>
                                <p>Total : {{$result->total}}</p>
                                <p>Date : {{$result->created_at}}</p>
                            </div></center>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

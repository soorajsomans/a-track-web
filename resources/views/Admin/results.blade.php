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
                            <form method="POST" action = "/admin/removeResult/{{$result->id}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" class="close" value="&times;"></form><br>
                            <center><h1><span class="glyphicon glyphicon-user"></span></h1>
                            <div class="caption">
                                <div class="panel panel-danger">
                                <h3 style="color:#FF5722;">{{$result->user->name}}</h3>
                                <p>Subject : {{$result->subject}}</p>
                                <p>Score : {{$result->mark}}</p>
                                <p>Total : {{$result->total}}</p>
                                <p>Date : <b>{{$result->created_at->format('d.m.Y')}}</b></p>
                            </div></div></center>
                        </div>
                    </div>
                @endforeach
                </div>
                {{$results->links()}}
            </div>
        </div>
    </div>
</div>




@endsection

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
                                <h3 style="color:#FF5722;">{{$result->name}}</h3>
                                <p>USER ID : {{$result->id}}</p>
                                <a href="showresults/{{$result->id}}" class="btn btn-success">Show Exam Results</a><br><br>
                            </div></div></center>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

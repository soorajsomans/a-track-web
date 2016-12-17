@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Score Card</div>
                <div class="panel-body">
                 <center> <h2> You have Scored {{$score}} Out Of {{$total}} <span class="glyphicon glyphicon-ok"></span></h2></center>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

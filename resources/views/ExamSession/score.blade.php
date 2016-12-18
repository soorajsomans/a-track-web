@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Score Card</div>
                <div class="panel-body">
                 <center>
                 <div class="col-sm-6 col-md-6 col-md-offset-3">
                     <div class="thumbnail">
                         <center><h1><span class="glyphicon glyphicon-user"></span></h1>
                         <div class="caption">
                             <div class="panel panel-danger">
                             <h3 style="color:#FF5722;">{{$result->user->name}}</h3>
                             <p>Subject : {{$result->subject}}</p>
                             <p>Score : {{$result->mark}}</p>
                             <p>Total : {{$result->total}}</p>
                             <p>Date : <b>{{$result->created_at->format('d.m.Y')}}</b></p>
                         </div><a href="{{url('/exam')}}" class="btn btn-primary">Take Another Exam</a>
                     </div></center>
                     </div>
                 </div>
                 </center>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">Answers and Description</div>
                <div class="panel-body">

                    @foreach($subs as $ans)

                        <h2>Question: {{$ans->question}}</h2>
                        <h4> Answer: @if($ans->ans ==1)
                            {{$ans->opt1}}
                        @elseif($ans->ans ==2)
                            {{$ans->opt2}}
                        @elseif($ans->ans ==3)
                            {{$ans->opt3}}
                        @else
                            {{$ans->opt4}}
                        @endif</h4>
                        <h6>Explanation: {{$ans->explanation}}</h6>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

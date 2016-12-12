@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-info">
                <div class="panel-heading">Select Subject</div>
                <div class="panel-body">
                    <center>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/hist.jpeg" alt="img">
                                    <div class="caption">
                                        <h3>History</h3>
                                        <p>History</p>
                                        <p><a href="{{url('/exm/1')}}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>History
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/bak1.jpg" alt="img">
                                    <div class="caption">
                                        <h3>Geography</h3>
                                        <p>...</p>
                                        <p><a href="{{url('/exm/4')}}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Take Exam
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/bak1.jpg" alt="img">
                                    <div class="caption">
                                        <h3>Polity</h3>
                                        <p>...</p>
                                        <p><a href="{{url('/exm/3')}}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Take Exam
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/bak1.jpg" alt="img">
                                    <div class="caption">
                                        <h3>Current Affairs</h3>
                                        <p>...</p>
                                        <p><a href="{{url('/exm/1')}}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Take Exam
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/bak1.jpg" alt="img">
                                    <div class="caption">
                                        <h3>Economics</h3>
                                        <p>Economics is a bullshit.</p>
                                        <p><a href="{{url('/exm/2')}}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Take Exam
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/bak1.jpg" alt="img">
                                    <div class="caption">
                                        <h3>Science and Technology</h3>
                                        <p>...</p>
                                        <p><a href="{{url('/exm/1')}}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Take Exam
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            @if(Auth::User()->role>0)
                                <a href="{{url('/examUpload')}}" class="btn btn-success">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Add Exam questions
                                </a>
                            @endif
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection

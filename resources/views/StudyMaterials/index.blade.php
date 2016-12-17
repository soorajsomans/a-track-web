@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><center>Study Materials</center></h3></div>
                <div class="panel-body">
                    @if(Auth::User()->role>0)
                  <form enctype="multipart/form-data" method="POST" action="uploadStud">
                    <label>Subject:</label>
                    <input type="text" name="subject">

                    <br>
                    <label>Chapter/Description:</label>
                    <input type="text" name="chapter">
                    <input type="file" name="files" id="file">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary" value="Upload">
                  </form>
                  <br>
                    @endif


                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/history.jpeg" alt="img">
                            <div class="caption">
                                <h3>History</h3>
                                <p>History</p>
                                <p><a href="{{url('/studymaterials/1')}}" class="btn btn-warning btn-lg">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>History
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/geography.jpeg" alt="img">
                            <div class="caption">
                                <h3>Geography</h3>
                                <p>...</p>
                                <p><a href="{{url('/studymaterials/3')}}" class="btn btn-warning btn-lg">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Geography
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/politics.jpg" alt="img">
                            <div class="caption">
                                <h3>Polity</h3>
                                <p>...</p>
                                <p><a href="{{url('/studymaterials/2')}}" class="btn btn-warning btn-lg">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Polity
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/current-affairs.jpg" alt="img">
                            <div class="caption">
                                <h3>Current Affairs</h3>
                                <p>...</p>
                                <p><a href="{{url('/studymaterials/6')}}" class="btn btn-warning btn-lg">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Current Affiers
                                </a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/ecnomics.jpg" alt="img">
                            <div class="caption">
                                <h3>Economics</h3>
                                <p>Economics is a bullshit.</p>
                                <p><a href="{{url('/studymaterials/4')}}" class="btn btn-warning btn-lg">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Economics
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/science.jpg" alt="img">
                            <div class="caption">
                                <h3>Science and Technology</h3>
                                <p>...</p>
                                <p><a href="{{url('/studymaterials/5')}}" class="btn btn-warning btn-lg">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Science And Technology
                                </a></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-0">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>
                <div class="panel-body">
                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="images/.jpeg" alt="img">
                          <div class="caption">
                              <h3>View Test Results</h3>
                              <p>Check results of Users who have taken the test</p>
                              <p><a href="{{url('/exam')}}" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-star" aria-hidden="true" ></span>Exam Session
                              </a></p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="images/.jpeg" alt="img">
                          <div class="caption">
                              <h3>View Feedback</h3>
                              <p>...</p>
                              <p><a href="{{url('/studymaterials')}}" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-star" aria-hidden="true" ></span> Study Material
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

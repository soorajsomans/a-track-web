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
                            <center><h1><span class="glyphicon glyphicon-user"></span></h1>
                            <div class="caption">
                                <h3>Manage Users</h3>
                                <p>Check results of Users who have taken the test</p>
                                <p><a href="{{url('/admin/users')}}" class="btn btn-default btn-lg">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true" ></span>View Users
                                </a></p>
                            </div></center>
                        </div>
                    </div>
                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <center><h1><span class="glyphicon glyphicon-list-alt"></span></h1>
                          <div class="caption">
                              <h3>View Test Results</h3>
                              <p>Check results of Users who have taken the test</p>
                              <p><a href="{{url('/admin/results')}}" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-star" aria-hidden="true" ></span>Exam Results
                              </a></p>
                          </div></center>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <center><h1><span class="glyphicon glyphicon-comment"></span></h1>
                          <div class="caption">
                              <h3>View Feedback</h3>
                              <p>View FeedBack given By Users</p>
                              <p><a href="{{url('/admin/feedback')}}" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-star" aria-hidden="true" ></span> FeedBack
                              </a></p>
                          </div></center>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

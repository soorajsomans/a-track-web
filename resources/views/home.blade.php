@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-0">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:light-blue;"><h3>AMRITA TRAINING REFERENCE AND COACHING KIT</div>
                <div class="panel-body">

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="images/exam.jpg" alt="img">
                          <div class="caption">
                              <h3>Exam Session</h3>
                              <p>...</p>
                              <p><a href="{{url('/exam')}}" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-star" aria-hidden="true" ></span>Exam Session
                              </a></p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="images/study.png" alt="img">
                          <div class="caption">
                              <h3>Study Material</h3>
                              <p>...</p>
                              <p><a href="{{url('/studymaterials')}}" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-star" aria-hidden="true" ></span> Study Material
                              </a></p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="images/magazine.jpg" alt="img">
                          <div class="caption">
                              <h3>Magazines</h3>
                              <p>...</p>
                              <p><a href="{{url('/magazines')}}" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-star" aria-hidden="true" ></span>Magazine
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

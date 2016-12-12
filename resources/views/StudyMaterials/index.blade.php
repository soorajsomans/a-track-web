@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
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
                  <a href="{{url('/studymaterials/1')}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>History
                  </a>
                  <a href="{{url('/studymaterials/1')}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>History
                  </a>
                  <a href="{{url('/studymaterials/1')}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>History
                  </a>
                  <a href="{{url('/studymaterials/1')}}" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>History
                  </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

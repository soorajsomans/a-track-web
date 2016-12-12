@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-success">
                <div class="panel-heading">Add Exam From File(CSV,Excel)</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" method="POST" action="uploadExcel">
                      <label>Select File:</label>
                      <input type="file" name="exam" id="file">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-primary" value="Upload">
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-0">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard - Score Card</div>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Subject</th>
                        <th>Score</th>
                        <th>Total</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($res as $r)
                    <tr>
                      <th>{{$r->subject}}</th>
                      <th>{{$r->mark}}</th>
                      <th>{{$r->total}}</th>
                          <th>  <form method="POST" action = "/admin/removeResult/{{$r->id}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" class="btn btn-danger" value="&times;"></form><br></th>
                          </tr>

                @endforeach
              </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

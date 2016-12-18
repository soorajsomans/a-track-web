@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-16 col-md-0">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard - Manage Users </div>
                <div class="panel-body">
                    <h5>Total Users : {{App\User::count()}} </h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th># User Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Delete Account</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)

                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><form method="POST" action="/admin/removeUser/{{$user->id}}">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <input type="submit" class="btn btn-danger" value="Delete">
                                        </form></td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

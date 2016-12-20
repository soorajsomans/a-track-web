@extends('layouts.app')
@section('content')
<style>
.bs-callout {
  margin: 20px 0;
  padding: 15px 30px 15px 15px;
  border-left: 5px solid #eee;
}
.bs-callout h4 {
  margin-top: 0;
}
.bs-callout p:last-child {
  margin-bottom: 0;
}
.bs-callout code,
.bs-callout .highlight {
  background-color: #fff;
}
.bs-callout-danger {
  background-color: #fcf2f2;
  border-color: #dFb5b4;
}
.bs-callout-warning {
  background-color: #fefbed;
  border-color: #f1e7bc;
}
.bs-callout-info {
  background-color: #f0f7fd;
  border-color: #d0e3f0;
}
</style>
<div class="container">
       <div class="row">
           <div class="col-md-8 col-md-offset-2">
           </div>
           <div class="panel panel-default">
               <div class="panel-heading">FeedBack Panel</div>
               <div class="panel-body">
                 <h2>FeedBacks and Replies</h2>
                 <hr>
                 @foreach($feedbacks as $feedback)
                 <div class="bs-callout bs-callout-info">
                   <h4>{{$feedback->feedback}}</h4>
                   <p>Reply: {{$feedback->reply}}</p>
                 </div>
                 @endforeach
               </div>
           </div>
       </div>
   </div>
@endsection

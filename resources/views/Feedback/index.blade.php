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
               <div class="panel-heading">FeedBacks</div>
               <div class="panel-body">
                 <h2>FeedBacks</h2>
                 <hr>
                 @foreach($feedbacks as $feedback)
                 <div class="bs-callout bs-callout-info">
                   <form method="POST" action = "/admin/deletefeedback/{{$feedback->id}}">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <input type="submit" class="close" value="&times;"></form>
                   <h4>{{$feedback->user->name}} for {{$feedback->subject}} at {{$feedback->created_at->format('d/m/Y')}}</h4>
                   <p>{{$feedback->feedback}}</p>
                   <form method="POST" action="postreply/{{$feedback->id}}">
                     {{csrf_field()}}
                   <textarea style="width: 1088px; height: 100px;" name="reply" width="100px"></textarea>
                     <input type="submit" class="btn btn-info btn-block" value="Reply" style="font-size: 20px;">
                   </form>
                 </div>
                 @endforeach
               </div>
           </div>
       </div>
   </div>
@endsection

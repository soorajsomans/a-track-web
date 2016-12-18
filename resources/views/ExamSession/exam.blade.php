@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-success">
                <div class="panel-heading">Exam</div>
                <div class="panel-body">
                <form action="submitScore" method="POST">
                    @foreach($questions as $q)
                    <h1>{{$q->question}}</h1>
                    <div class="radio">
                        <input type="hidden" name ="ids[]" value="{{$q->id}}">
                        <label><input type="radio" name="ques[{{$q->id}}]" value="1">{{$q->opt1}}</label>
                        </div>
                            <div class="radio">
                        <label><input type="radio" name="ques[{{$q->id}}]" value="2">{{$q->opt2}}</label>
                        </div>
                            <div class="radio">
                        <label><input type="radio" name="ques[{{$q->id}}]" value="3">{{$q->opt3}}</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="ques[{{$q->id}}]" value="4">{{$q->opt4}}</label>
                        </div>
                @endforeach
                    <input type="hidden" name="subject" value="{{ $id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function score(){
  var cnt=0;

  	if(document.getElementById("1").checked)
  	cnt++;
    alert(cnt);
}

</script>


@endsection

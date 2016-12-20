<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Feedback;
use Redirect;

class FeedbackController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin')->except('post');
    }
    public function index(){
      $feedbacks = Feedback::orderBy('id','desc')->get();
      return view('Feedback.index')->withFeedbacks($feedbacks);
    }
    public function post(Request $request)
    {
      $feedback = new Feedback();
      $feedback->feedback = $request->feedback;
      $feedback->user_id=Auth::User()->id;
      $feedback->reply="No Reply Yet!";
      $feedback->subject=$request->sub;
      $feedback->save();
      return Redirect::action('ExamController@feedback');
    }
    public function reply(Request $request,$id){
      $feedback = Feedback::find($id);
      $feedback->reply=$request->reply;
      $feedback->update();
      return view('home');
    }
    public function destroy($id){
      $feedback = Feedback::find($id);
      $feedback->delete();
      return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Feedback;
use Session;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use App\Result;
use Auth;

class ExamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ExamSession.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function feedback(){
       $feedbacks = Feedback::where('user_id',Auth::User()->id)->orderBy('id','desc')->get();
       return view('ExamSession.feedback')->withFeedbacks($feedbacks);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified exam.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exam($id)
    {
        $questions = null;
        switch ($id){
            case 1:$questions=Exam::where('subject','History')->inRandomOrder()->paginate(100);break;
            case 2:$questions=Exam::where('subject','Economics')->inRandomOrder()->paginate(100);break;
            case 3:$questions=Exam::where('subject','Polity')->inRandomOrder()->paginate(100);break;
            case 4:$questions=Exam::where('subject','Geography')->inRandomOrder()->paginate(100);break;
            case 5:$questions=Exam::inRandomOrder()->get();break;
            case 6:$questions=Exam::where('subject','CurrentAffairs')->inRandomOrder()->paginate(100);break;
            case 7:$questions=Exam::where('subject','ScienceandTechnology')->inRandomOrder()->paginate(100);break;
        }
        return view('ExamSession.exam')->withQuestions($questions)->withId($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function uploadExcel(){
     if(Input::hasFile('exam')){
         $path = Input::file('exam')->getRealPath();
         $data = Excel::load($path, function($reader) {
         })->get();
         if(!empty($data) && $data->count()){
             foreach ($data as $key => $value) {
                 Exam::create([
                 'subject' => $value->subject,
                 'chapter' => $value->chapter,
                 'question' => $value->question,
                 'opt1' => $value->opt1,
                 'opt2' => $value->opt2,
                 'opt3' => $value->opt3,
                 'opt4' => $value->opt4,
                 'explanation' => $value->explanation,
                 'ans' => $value->ans
             ]);
             }
                return redirect()->back();
         }
     }
 }

    public function add(){
        return view('ExamSession.add');
    }

    public function score(Request $request){
        $score=0;
        $total=0;
        $answers = Input::get('ques');
        $ids = Input::get('ids');
        $i=0;
        if($answers == NULL){
          return redirect()->back();
        }
        foreach($ids as $id){
        $subs[$i]=Exam::where('id',$id)->first();
        $i++;
        }
        $subject = Input::get('subject');
            foreach($answers as $ans){
                $an = Exam::find($ids[$total]);
                if($an->ans == $ans){
                    $score++;
                }
                $total++;
        }
        $sub= null;
        switch ($subject){
            case 1:$sub="History";break;
            case 2:$sub="Economics";break;
            case 3:$sub="Polity";break;
            case 4:$sub="Geography";break;
            case 5:$sub="Mixed";break;
            case 6:$sub="CurrentAffairs";break;
            case 7:$sub="ScienceandTechnology";break;
        }
        $result = new Result();
        $result->user_id = Auth::User()->id;
        $result->subject =$sub;
        $result->mark=$score;
        $result->total=$total;
        $result->save();

        return view('ExamSession.score')->withScore($score)->withTotal($total)->withSubs($subs)->withResult($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use Session;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;

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
    public function create()
    {
        //
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
            case 1:$questions=Exam::where('subject','History')->get();break;
            case 2:$questions=Exam::where('subject','Economics')->get();break;
            case 3:$questions=Exam::where('subject','Polity')->get();break;
            case 4:$questions=Exam::where('subject','Geography')->get();break;
            case 5:$questions=Exam::inRandomOrder()->get();break;
        }
        return view('ExamSession.exam')->withQuestions($questions);
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

    public function validation(){

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

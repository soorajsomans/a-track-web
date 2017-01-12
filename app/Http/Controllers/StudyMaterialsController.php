<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyMaterial;
use Response;
use Illuminate\Support\Facades\Input;

class StudyMaterialsController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      return view('StudyMaterials.index');
    }
    public function subjects($sub){
      if($sub ==1){
        $sub="History";
      $subject=StudyMaterial::where('subject','History')->get();
    }
    else if($sub ==2){
      $sub="Polity";
    $subject=StudyMaterial::where('subject','Polity')->get();
    }
    else if($sub ==3){
      $sub="Geography";
    $subject=StudyMaterial::where('subject','Geography')->get();
    }
    else if($sub ==4){
      $sub="Economics";
    $subject=StudyMaterial::where('subject','Economics')->get();
    }
    else if($sub ==5){
      $sub="Science And Technology";
    $subject=StudyMaterial::where('subject','Science And Technology')->get();
    }
    else if($sub ==6){
    return url('www.amritaiias.com');
    }



    return view ('StudyMaterials.show')->withSubject($subject)->withSub($sub);
    }
    public function showPDF($id){
      $pdf=StudyMaterial::findOrfail($id);
      $filename = $pdf->location;
      $path = 'files/'.$filename;
      return Response::make(file_get_contents($path), 200, [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'inline; filename="'.$filename.'"']);
    }
    public function uploadPDF(Request $request){
      $pdf = new StudyMaterial();
      $title=$request->get('subject');
      if (Input::file('files')->isValid()) {
           $destinationPath = 'files'; // upload path
           $extension = Input::file('files')->getClientOriginalExtension(); // getting file extension
           $fileName = uniqid().'.'.$extension; // renameing
           Input::file('files')->move($destinationPath, $fileName);
           $pdf->subject = $title;
           $pdf->chapter=$request->get('chapter');
           $pdf->location=$fileName;
           $pdf->save();
         }
      return view('StudyMaterials.index');
    }
}

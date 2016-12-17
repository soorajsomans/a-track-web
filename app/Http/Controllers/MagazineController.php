<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazine;
use Response;
use Illuminate\Support\Facades\Input;

class MagazineController extends Controller
{
  public function uploadPDF(Request $request){
    $pdf = new Magazine();
    $title=$request->get('month');
    if (Input::file('files')->isValid()) {
         $destinationPath = 'files'; // upload path
         $extension = Input::file('files')->getClientOriginalExtension(); // getting file extension
         $fileName = uniqid().'.'.$extension; // renameing
         Input::file('files')->move($destinationPath, $fileName);
         $pdf->month = $title;
         $pdf->version=$request->get('version');
         $pdf->location=$fileName;
         $pdf->save();
       }
    return view('Magazine.index');
  }

public function viewPDF()
{
  $mag=Magazine::get();
  return view('Magazine.show')->withMag($mag);
}

  public function showPDF($id){
    $pdf=Magazine::findOrfail($id);
    $filename = $pdf->location;
    $path = 'files/'.$filename;
    return Response::make(file_get_contents($path), 200, [
  'Content-Type' => 'application/pdf',
  'Content-Disposition' => 'inline; filename="'.$filename.'"']);
  }


  public function index(){
    return view('Magazine.index');
  }

}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/studymaterials','StudyMaterialsController@index');
Route::get('/studymaterials/{sub}','StudyMaterialsController@subjects');
Route::post('uploadStud','StudyMaterialsController@uploadPDF');
Route::get('showPDF/{id}','StudyMaterialsController@showPDF');
Route::resource('/exam','ExamController');
Route::get('/exm/{id}','ExamController@exam');
Route::post('submit','ExamController@validation');
Route::post('uploadExcel','ExamController@uploadExcel');
Route::get('examUpload','ExamController@add');

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
Route::post('uploadMag','MagazineController@uploadPDF');
Route::get('/magUpload','MagazineController@index');
Route::get('viewPDF/{id}','MagazineController@showPDF');
Route::get('magazines','MagazineController@viewPDF');
Route::get('admin','AdminController@index');
Route::post('/exm/submitScore','ExamController@score');
Route::get('/admin/users','AdminController@showUsers');
Route::get('/admin/results','AdminController@showResults');
Route::post('/admin/removeUser/{id}','AdminController@destroy');
Route::post('/admin/removeResult/{id}','AdminController@remove');

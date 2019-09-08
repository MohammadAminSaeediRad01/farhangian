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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/', 'StudentsController@allOfStudents')->name('masterPage');
Route::get('/delete/student/{student_id}', 'StudentsController@deleteStudent')->name('delete.student');
Route::get('/edit/student/{student_id}', 'StudentsController@editStudent')->name('edit.student');













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
<<<<<<< HEAD

Route::get('/add/student/', 'StudentsController@addStudent')->name('add.get.student');
Route::post('/add/student/', 'StudentsController@createStudent')->name('add.post.student');

Route::get('/edit/student/{student_id}', 'StudentsController@editStudent')->name('edit.get.student');
Route::post('/edit/student/{student_id}', 'StudentsController@updateStudent')->name('edit.post.student');

//Route::post('/edit/student/{student_id}', 'StudentsController@updateStudent')->name('update.student');
=======
Route::get('/edit/student/{student_id}', 'StudentsController@editStudent')->name('edit.student');
Route::get('users/{id}', function ($id) {

});
>>>>>>> 5bf905282eb815e0c4d86706a2d0c88bb7d605b7













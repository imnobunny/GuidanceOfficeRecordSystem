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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//students

Route::get('/add/student', 'StudentController@create');
Route::post('/save/student', 'StudentController@store');
Route::get('/edit/student/{id}', 'StudentController@edit');
Route::get('/delete/student/{id}', 'StudentController@destroy');
Route::get('/view/student/{id}', 'StudentController@show');
Route::get('/update/student/{id}', 'StudentController@update');
Route::get('/records/{id}', 'RecordController@allrecords');
Route::get('/record/new/{id}', 'RecordController@addrecord');
Route::get('/record/view/{id}', 'RecordController@show');



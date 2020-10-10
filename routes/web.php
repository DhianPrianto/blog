<?php

use Illuminate\Support\Facades\Route;

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

//root
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//         return view('index');
//     });

// Route::get('/about', function () {
//     $nama = 'Larasati Fashion';    
//     return view('about', ['nama'=> $nama]);
//     });

// Route::get('/mahasiswa ', function () {
//         return view('mahasiwa');
//     });


//controller
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');

//students
Route::get('/students', 'StudentsController@index');
Route::post('/students', 'StudentsController@store');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::patch('/students/{student}', 'StudentsController@update');
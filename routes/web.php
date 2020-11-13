<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Kad01Controller;

Route::get('/', function () {
    // "/"がhttp://127.0.0.1:8000/になる
    return view('welcome');
});

//ここから課題
Route::get('Kad01_1','Kad01_1Controller@index');
// 'Kad01_1'でhttp://127.0.0.1:8000/Kad01_1になる
Route::get('Kad02_1',"Kad02_1Controller@index");
Route::get('Kad02_2','Kad02_2Controller@index');
Route::get('kad03_1','Kad03_1Controller@index');
Route::get('kad03_3','Kad03_3Controller@index');
Route::get('kad05_1','Kad05_1Controller@index');
Route::get('kad06_1','Kad06_1Controller@index');
Route::get('kad06_2','Kad06_2Controller@index');
//post
Route::post('kad05_1','Kad05_1Controller@post');
Route::post('kad06_1','Kad06_1Controller@post');

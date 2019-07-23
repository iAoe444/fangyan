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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('index',['uses'=>'FrontEndController@index']);
Route::get('dialectculture',['uses'=>'FrontEndController@dialectculture']);
Route::get('homelocation',['uses'=>'FrontEndController@homelocation']);
Route::get('lifescene',['uses'=>'FrontEndController@lifescene']);
Route::get('dialecttest',['uses'=>'FrontEndController@dialecttest']);
Route::get('aboutus',['uses'=>'FrontEndController@aboutus']);
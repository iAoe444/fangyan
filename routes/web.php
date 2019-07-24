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

Route::get('/',['uses'=>'FrontEndController@index']);
Route::get('index',['uses'=>'FrontEndController@index']);
Route::get('dialectculture',['uses'=>'FrontEndController@dialectculture']);
Route::group(['prefix' => 'dialectculture'],function(){
    Route::get('article',['uses'=>'FrontEndController@article']);
    Route::get('wxarticle',['uses'=>'FrontEndController@wxarticle']);
    Route::get('image',['uses'=>'FrontEndController@image']);
});
Route::get('homelocation',['uses'=>'FrontEndController@homelocation']);
Route::get('lifescene',['uses'=>'FrontEndController@lifescene']);
Route::get('dialecttest',['uses'=>'FrontEndController@dialecttest']);
Route::get('aboutus',['uses'=>'FrontEndController@aboutus']);

Route::group(['prefix' => 'articleoperation'],function(){
    Route::get('add',['uses'=>'ArticleController@addArticle']);
});

Route::group(['prefix' => 'sceneoperation'],function(){
    Route::get('add',['uses'=>'LifeSceneController@addScene']);
});

Route::group(['prefix' => 'feedbackoperation'],function(){
    Route::post('commit',['uses'=>'FeedBackController@addFeedback']);
});
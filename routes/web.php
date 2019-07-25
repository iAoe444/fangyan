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

Route::get('/',['uses'=>'FrontEndController@welcome']);
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
    Route::post('commit',['uses'=>'FeedbackController@addFeedback']);
});

Route::group(['prefix' => 'manage'],function(){
    Route::get('/',['uses'=>'ManageController@index']);
    Route::get('article',['uses'=>'ManageController@article']);
    Route::get('feedback',['uses'=>'ManageController@feedback']);
    Route::get('scene',['uses'=>'ManageController@scene']);
    Route::group(['prefix' => 'article'],function(){
        Route::any('create',['uses'=>'ArticleController@create']);
        Route::get('delete',['uses'=>'ArticleController@delete']);
        Route::any('update',['uses'=>'ArticleController@update']);
    });
    Route::group(['prefix' => 'feedback'],function(){
        Route::get('delete',['uses'=>'FeedbackController@delete']);
    });
    Route::group(['prefix' => 'scene'],function(){
        Route::any('create',['uses'=>'LifeSceneController@create']);
        Route::get('delete',['uses'=>'LifeSceneController@delete']);
        Route::any('update',['uses'=>'LifeSceneController@update']);
    });
});
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

Route::get('/', function () {
    return view('top');
});
Route::get('/question', 'QuestionController@index');
Route::get('/create_free', 'CreateFreeController@index');
Route::get('/about', function () {return view('about');});
Route::get('/terms', function () {return view('terms');});
Route::get('/contact', function () {return view('contact');});
Route::post('/_ajax', 'UpdateQuestionController@post');

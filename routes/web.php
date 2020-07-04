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

Route::get('/', 'QuestionController@index');

Route::get('/pertanyaan', 'QuestionController@index');
Route::get('/pertanyaan/create', 'QuestionController@create');
Route::post('/pertanyaan', 'QuestionController@store');
Route::get('/pertanyaan/edit/{id}', 'QuestionController@edit');
Route::put('/pertanyaan/{id}', 'QuestionController@update');

Route::get('/pertanyaan/delete/{id}', 'QuestionController@destroy');


Route::get('/jawaban/{question_id}', 'AnswerController@index');
Route::post('/jawaban/{question_id}', 'AnswerController@store');
Route::get('/jawaban/edit/{id}', 'AnswerController@edit');
Route::put('/jawaban/{question_id}/{id}', 'AnswerController@update');
Route::get('/jawaban/delete/{question_id}/{id}', 'AnswerController@destroy');




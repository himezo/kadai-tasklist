<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'TasksController@index');

// CRUD
//Route::get('tasks/{id}', 'TasksController@show');
//Route::post('tasks', 'TasksController@store');
//Route::put('tasks/{id}', 'TasksController@update');
//Route::delete('tasks/{id}', 'TasksController@destroy');

// index: showの補助
//Route::get('tasks', 'TasksController@index');

// create: 新規作成用のフォームページ
//Route::get('tasks/create', 'TasksController@create');

//edit: 更新用のフォームページ
//Route::get('tasks/{id}/edit', 'TasksController@edit');

Route::resource('tasks', 'TasksController');







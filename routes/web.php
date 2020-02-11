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

Route::get('/projects', function () {
    return view('projects.welcome');
});



//Route::resource('projects','ProjectsController');

Route::get('/projects/showdata','ProjectsController@index');
Route::get('projects/create','ProjectsController@create');
Route::get('/projects/{project}','ProjectsController@show');
Route::get('/projects/{project}/edit','ProjectsController@edit');


Route::post('/projects/create','ProjectsController@store');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');



Route::patch('/projects/{project}','ProjectsController@update');

Route::delete('/projects/{project}','ProjectsController@destroy');


Route::patch('/tasks/{task}','ProjectTasksController@update');

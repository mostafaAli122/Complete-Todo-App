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

Route::get('/new',[
    'uses'=>'PagesController@new'
]);
Route::get('/todos',[
    'uses'=>'todosController@index',
    'as' => 'todos'
]);
Route::post('/create/todo',[
    'uses'=>'todosController@store'
]);
Route::post('/todo/update/{id}',[
    'uses'=>'todosController@update',
    'as' => 'todo.update' 
]);
Route::get('/todo/delete/{id}',[
    'uses'=>'todosController@delete',
    'as'=>'todo.delete'
]);
Route::get('/todo/save/{id}',[
    'uses'=>'todosController@save',
    'as'=>'todo.save'
]);
Route::get('/todo/completed/{id}',[
    'uses'=>'todoController@completed',
    'as' =>'todo.completed'
]);
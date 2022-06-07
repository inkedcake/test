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
    return view('index');
});
Route::get('/tasks', 'App\Http\Controllers\TasksController@index')->name('tasks');
Route::get('/tags', 'App\Http\Controllers\TagsController@index')->name('tags');
Route::get('/task/{id}', 'App\Http\Controllers\TasksController@innerTask')->name('task');
Route::get('/tag/{id}', 'App\Http\Controllers\TagsController@innerTag')->name('tag');
Route::get('/tasks/create', 'App\Http\Controllers\TasksController@createTaskPage')->name('task-create');
Route::post('/tasks/create', 'App\Http\Controllers\TasksController@createTask')->name('tasks-create-submit');
Route::get('/tags/create', function (){ return view('create_tag');})->name('tag-create');
Route::post('/tags/create', 'App\Http\Controllers\TagsController@createTag')->name('tags-create-submit');


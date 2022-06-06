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
Route::get('/tag/{id}', 'App\Http\Controllers\TagController@innerTag')->name('tag');
Route::get('/tasks/create', function (){ return view('create_task');})->name('tasks-create');
Route::post('/tasks/create', 'App\Http\Controllers\TasksController@create')->name('tasks-create-submit');
Route::get('/tags/create', function (){ return view('create_tag');})->name('tags-create');
Route::post('/tags/create', 'App\Http\Controllers\TagsController@create')->name('tags-create-submit');


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
    return view('welcome');
});

//Route::get('/posts', [PostController::class, 'index']);
//Route::get('/todos', 'TodosController@index')->name('todos.index');
Route::get('/todos', 'TodosController@index');

Route::get('/about', function(){
    return view('about');
});
    

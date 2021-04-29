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

Route::get('/todos/{todo}', 'TodosController@show');
Route::get('/new-todos', 'TodosController@create');
Route::post('/store-todos', 'TodosController@store')->name('todos.store');
Route::get('/todos/{todo}/edit', 'TodosController@edit');
Route::post('/todos/{todo}/update-todos', 'TodosController@update')->name('todos.update');
Route::get('/todos/{todo}/delete', 'TodosController@destroy');
Route::get('/todos/{todo}/complete', 'TodosController@complete');

Route::get('/about', function(){
    return view('about');
});
    

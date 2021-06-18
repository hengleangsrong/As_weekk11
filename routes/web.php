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
Route::group(['prefix'=> 'dashboard','namespace' => 'App\Http\Controllers' ], function () {
    
Route::get('/categories', 'CategoryController@index')->name('dashboard.category.index');
Route::get('/categories/create', 'CategoryController@create')->name('dashboard.category.create');
Route::post('/categories/store', 'CategoryController@store')->name('dashboard.category.store');
Route::get('/categories/delete/{id}', 'CategoryController@destroy')->name('dashboard.category.delete');
Route::get('/categories/edit/{id}', 'CategoryController@edit')->name('dashboard.category.edit');
Route::post('/categories/update/{id}', 'CategoryController@update')->name('dashboard.category.update');
});
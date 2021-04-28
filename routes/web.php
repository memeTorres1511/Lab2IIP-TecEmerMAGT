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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/productos', [App\Http\Controllers\HomeController::class, 'indexprod'])->name('productos');
//Route::get('productos', 'HomeController@indexprod')->name('productos');

Route::resource('productos', 'App\Http\Controllers\ProductosController');
//Route::resource('productos', 'ProductosController');
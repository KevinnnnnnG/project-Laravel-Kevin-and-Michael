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

Route::view('/', 'admin/index')->name('index');

Route::view('/index', 'admin/index')->name('index');
Route::view('contactenos', 'admin/contactenos')->name('contactenos');
Route::view('otros', 'admin/otros')->name('otros');
Route::get('/admin/{nombre?}', function ($nombre = "invitado"){
    return view('admin/usuarioRegistrados')->with(['nombre' => $nombre, 'años' => 19])->name('registrados');
});
Route::post('/contactenos', '\App\Http\Controllers\contactenosController@store' );

//Route::get('/registrados', \App\Http\Controllers\usuariosController::class)->name('registrados');
Route::get('/registrados','App\Http\Controllers\RegistrosController@index')->name('register.index');
Route::get('/registrados/crear','App\Http\Controllers\RegistrosController@create')->name('register.create');
Route::post('/registrados','App\Http\Controllers\RegistrosController@store')->name('register.store');
Route::get('/registrados/{proyect}','App\Http\Controllers\RegistrosController@show')->name('register.show');

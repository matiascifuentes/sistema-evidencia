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

Auth::routes(['register'=>false]);

Route::get('/admin/home',function(){
	return view('admin.home');
});
Route::get('/profesor/home',function(){
	return view('profesor.home');
});
Route::get('/profesor/nuevaevidencia',function(){
	return view('profesor.nuevaEvidencia');
});

Route::get('/dac/home',function(){
	return view('dac.home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/revisor/home','Revisor\HomeRevisorController@index')->name('revisorHome');
Route::get('/revisor/formularioEvidencia/{id}',[
	'as' => 'formularioEvidencia-show',
	'uses' => 'Revisor\HomeRevisorController@show'
]);
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

Route::get('/informatika', function(){
	return view("informatika");
});

Route::get('/login', function(){
	return view("login");
});

Route::get('/elektro', function(){
	return view("elektro");
});

Route::get('/sipil', function(){
	return view("sipil");
});

Route::get('template',function(){
	return view('template.base');
});
Route::get('index',function(){
	return view('index');
});

Route::get('kategori',function(){
	return view('kategori');
});

Route::get('log',function(){
	return view('log');
});

Route::get('register',function(){
	return view('register');
});

Route::get('keuangan',function(){
	return view('keuangan');
});

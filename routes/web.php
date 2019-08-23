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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminhome',function(){return view('admin.adminhome');});
Route::get('/admincontact',function(){return view('admin.admincontact');});
Route::get('/adminabout',function(){return view('admin.adminabout');});
Route::get('/adminblog',function(){return view('admin.adminblog');});
Route::get('/adminprograms',function(){return view('admin.adminprograms');});

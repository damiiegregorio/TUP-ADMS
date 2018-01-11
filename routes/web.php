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

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');
Route::get('/uploads', 'PagesController@uploads');
Route::get('/myarea', 'PagesController@assignedArea');
Route::get('/bin', 'PagesController@bin');
Route::get('/area1', 'PagesController@area1');
Route::get('/area2', 'PagesController@area2');
Route::get('/viewarea', 'PagesController@viewarea');

Route::get('/hello/{name}', function($name){

	return 'I am '.$name;
});

Route::resource('post', 'UploadController');

Auth::routes();


Route::get('/markAsRead', function(){
	auth()->user()->unreadNotifications->markAsRead();

});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'UploadController@search');
Route::get('/result', 'UploadController@result')->name('result');
Route::get('/assignedArea', 'PagesController@assignedArea')->name('assignedArea');

Route::get('/uploads/view/{id}', 'UploadController@view');
Route::get('/delete/{id}', 'UploadController@delete');
Route::get('/restore/{id}', 'UploadController@restore');
Route::get('/destroy/{id}', 'UploadController@destroy');
Route::get('/uploads/edit/{id}', 'UploadController@edit');


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
Route::get('/area1/{id}', 'PagesController@viewarea');
Route::get('/area2/{id}', 'PagesController@viewarea');

Route::get('/area2', 'PagesController@area2');
Route::get('/area3', 'PagesController@area3');
Route::get('/area4', 'PagesController@area4');
Route::get('/area5', 'PagesController@area5');
Route::get('/area6', 'PagesController@area6');
Route::get('/area7', 'PagesController@area7');
Route::get('/area8', 'PagesController@area8');
Route::get('/area9', 'PagesController@area9');
Route::get('/area10', 'PagesController@area10');

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
Route::get('/area1', 'PagesController@area1')->name('area1');

Route::get('/area2', 'PagesController@area2')->name('area2');
Route::get('/area3', 'PagesController@area3')->name('area3');
Route::get('/area4', 'PagesController@area4')->name('area4');
Route::get('/area5', 'PagesController@area5')->name('area5');
Route::get('/area6', 'PagesController@area6')->name('area6');
Route::get('/area7', 'PagesController@area7')->name('area7');
Route::get('/area8', 'PagesController@area8')->name('area8');
Route::get('/area9', 'PagesController@area9')->name('area9');
Route::get('/area10', 'PagesController@area10')->name('area10');

Route::get('/uploads/view/{id}', 'UploadController@view');
Route::get('/delete/{id}', 'UploadController@delete');
Route::get('/restore/{id}', 'UploadController@restore');
Route::get('/destroy/{id}', 'UploadController@destroy');
Route::get('/uploads/edit/{id}', 'UploadController@edit');


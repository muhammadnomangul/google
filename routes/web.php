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
Route::get('index', function () {
    return view('index');
});
Route::get('form', function () {
    return view('form');
});
Route::get('google', function () {
    return view('google');
});

Route::get('form', 'FileEntryController@index');
Route::get('edit/{id}', 'FileEntryController@edit');
Route::get('fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);
//Route::post('fileentry/add',[
//    'as' => 'addentry', 'uses' => 'FileEntryController@add']);

Route::post('fileentry/add', 'FileEntryController@add');
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'FileEntryController@search']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

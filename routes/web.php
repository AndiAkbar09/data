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

Route::group(['prefix'=>'datas'], function(){
    Route::get('index','DataController@index')->name('master.data');

    Route::get('create','DataController@create')->name('master.data.create');

    Route::post('save','DataController@store')->name('master.data.save');

    Route::get('edit/{data}','DataController@edit')->name('master.data.edit');

    Route::patch('update/{data}','DataController@update')->name('master.data.update');

    route::get('show/{data}', 'DataController@show')->name('master.data.show');
    
    route::delete('delete/{data}', 'DataController@destroy')->name('master.data.delete');

});
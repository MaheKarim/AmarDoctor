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
// Logout Route
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/area/view','AreaController@show')->name('showArea');
Route::get('/area/add','AreaController@index')->name('addArea');
Route::post('store-area', 'AreaController@store');
Route::get('/area/edit/{area}','AreaController@edit')->name('editArea');
Route::post('/update-area','AreaController@update')->name('updateArea');
Route::get('/area/delete/{id}','AreaController@delete')->name('deleteArea');


Route::get('/test-check','AreaController@check');

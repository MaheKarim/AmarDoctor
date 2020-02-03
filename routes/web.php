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

//Suse Symfony\Component\Routing\Annotation\Route;

Route::get('/', function () {
    return view('frontend.index');
});

//Route::get('/', 'FrontendController@indexpage')->name('frontEndRoot');

Auth::routes();
// Logout Route
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/area/view','AreaController@show')->name('showArea');
Route::get('/area/add','AreaController@index')->name('addArea');
Route::post('store-area', 'AreaController@store');
Route::get('/area/edit/{area}','AreaController@edit')->name('editArea');
Route::post('/update-area','AreaController@update')->name('updateArea');
Route::get('/area/delete/{id}','AreaController@delete')->name('deleteArea');


Route::get('/category/view', 'CategoryController@view')->name('showCategory');
Route::get('/category/delete/{id}', 'CategoryController@delete')->name('deleteCategory');


Route::get('/show/product','ProductController@index')->name('showProduct');
Route::get('/add/product','ProductController@add')->name('addProduct');
Route::post('store-product', 'ProductController@store');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('deleteProduct');


// Route::get('/settings', 'SettingsController@index')->name('adminseetings');
// Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');

//  Custom Login Route

Route::get('/custom/login', 'CustomAuthController@showPage')->name('customDoctorLogin');
Route::post('custom-login', 'CustomAuthController@login');

// Admin related group

Route::group(['as'=>'admin.' , 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>['auth', 'admin']], function() {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    // product for admin
    // Route::get('/show/product','ProductController@index')->name('showProduct');
    // Route::get('/add/product','ProductController@add')->name('addProduct');
    // Route::post('store-product', 'ProductController@store');
    // Route::get('/product/delete/{id}', 'ProductController@delete')->name('deleteProduct');



});

Route::group(['as'=>'doctor.', 'prefix' => 'doctor', 'namespace' => 'Doctor', 'middleware' =>['auth', 'doctor']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile/seetings', 'DashboardController@profile_seetings')->name('doctorProfileSeetings');
    Route::post('profile/update/pic', 'DashboardController@updateProfilePic')->name('update.profile_pic');

});

Route::group(['as'=>'nurse.' ,'prefix' => 'nurse', 'namespace' => 'Nurse', 'middleware' =>['auth', 'nurse']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'user.' ,'prefix' => 'user', 'namespace' => 'User', 'middleware' =>['auth', 'user']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// routes by ami
Route::get("doctor/signup", "DoctorController@signUpForm")->name("doctorSignUpForm");
Route::post("doctor/signup", "DoctorController@signUpFormSubmit")->name("doctorSignUpFormSubmit");

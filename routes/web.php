<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/install','FrontendController@install');
Route::get('/', 'FrontendController@indexpage')->name('frontEndRoot');

Auth::routes();
// Logout Route
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


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
Route::post('store-product', 'ProductController@store')->name('storeProduct');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('deleteProduct');



Route::group(['as'=>'admin.' , 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>['auth', 'admin']], function() {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

});
     Route::get('/change-password','CustomAuthController@passwordChange')->name('password.change');
     Route::post('/change-password', 'CustomAuthController@FormPassChange')->name('passwordFrom');


Route::group(['as'=>'doctor.', 'prefix' => 'doctor', 'namespace' => 'Doctor', 'middleware' =>['auth', 'doctor']], function() {


    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile/seetings', 'DashboardController@profile_seetings')->name('doctorProfileSeetings');
    Route::post('profile/update/pic', 'DashboardController@updateProfilePic')->name('update.profile_pic');
    Route::post('profile/update', 'DashboardController@profileSettings')->name('upadeteprofileSeetings');


});

Route::group(['as'=>'nurse.' ,'prefix' => 'nurse', 'namespace' => 'Nurse', 'middleware' =>['auth', 'nurse']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'user.' ,'prefix' => 'user', 'namespace' => 'User', 'middleware' =>['auth', 'user']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});


//  Custom Login Route

Route::get('/custom/login', 'CustomAuthController@showPage')->name('customDoctorLogin');
Route::post('custom-login', 'CustomAuthController@login');

Route::get("doctor/signup", "DoctorController@signUpForm")->name("doctorSignUpForm");
Route::post("doctor/signup", "DoctorController@signUpFormSubmit")->name("doctorSignUpFormSubmit");


Route::get('/review/add','ReviewController@addReview')->name('add.review');
Route::get('/review/admin/show','ReviewController@showReview')->name('show.review');
Route::post('/review-add','ReviewController@reviewcreate')->name('review');

// Profile See
Route::get('profile/{profile}' , 'ProfileController@doctor')->name('doctor.profile');

// Doctor Search
Route::get('/search/doctor', 'SearchController@search')->name('search.doctor');

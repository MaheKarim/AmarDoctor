<?php

/*
|--------------------------------------------------------------------------
|                        Web & Setup Routes
|--------------------------------------------------------------------------
*/


Route::get('/install','FrontendController@install');
Route::get('/optimize','FrontendController@optimize');
Route::get('/clear', 'FrontendController@clear');
Route::get('/', 'FrontendController@indexpage')->name('frontEndRoot');
Route::get('/dashboard', function () { return redirect (route('user.dashboard')); });
Route::get('/admin', function () { return redirect (route('admin.dashboard')); });
Route::get('/home', function () { return redirect (route('user.dashboard')); });

/*
|--------------------------------------------------------------------------
|                         Auth Routes
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('get/password-link/','Auth\ResetPasswordController@password')->name('password.email');



/*
|--------------------------------------------------------------------------
|                        Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['as'=>'admin.' , 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>['auth', 'admin']], function() {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/password/change','ProfileController@passChange')->name('change.password');
    Route::post('password/change','ProfileController@passChangeReq')->name('changepaswword');
    Route::get('/settings','SiteSettingsController@index')->name('settings');
    Route::post('settings-update','SiteSettingsController@store')->name('settings.store');

    Route::get('show/all_doctor','DashboardController@showDoctorAll')->name('showAllDoctor');
    Route::get('show/all_user','DashboardController@showAllUser')->name('showAllUser');
    Route::get('show/all_nurse','DashboardController@showAllNurse')->name('showAllNurse');

    Route::post('/export-user','DashboardController@exportUser')->name('export.onlyUser');
    Route::post('/export-nurse','DashboardController@exportNurse')->name('export.onlyNurse');
    Route::post('/export-doctor','DashboardController@exportDoctor')->name('export.onlyDoctor');

    Route::get('/delete/doctor/service/{id}', 'DashboardController@destroyDoctorReq')->name('delete.doctor_req');
    Route::get('/delete/user/{id}', 'DashboardController@destroy')->name('deleteUser');
    Route::get('/delete/doctor/{id}', 'DashboardController@destroyDoctor')->name('deleteDoctor');

    Route::get('/nursing/service/index', 'NursingServiceController@index')->name('nursing_service.index');
    Route::get('/nursing/service/create', 'NursingServiceController@create')->name('nursing_service.create');
    Route::post('nursing-store','NursingServiceController@store')->name('nursing_service.store');
    Route::get('/nursing/service/edit/{id}', 'NursingServiceController@edit')->name('nursing_service.edit');
    Route::post('nursing-update','NursingServiceController@update')->name('nursing_service.update');
    Route::get('/nursing/service/delete/{nursingService}', 'NursingServiceController@destroy')->name('nursing_service.destroy');



});


Route::group([
    'namespace' => '\Haruncpi\LaravelLogReader\Controllers',
    'middleware' => ['auth','admin']
],
    function () {
        Route::get(config('laravel-log-reader.view_route_path'), 'LogReaderController@getIndex');
        Route::post(config('laravel-log-reader.view_route_path'), 'LogReaderController@postDelete');
        Route::get(config('laravel-log-reader.api_route_path'), 'LogReaderController@getLogs');
    }
);

    Route::get('/product/booking/{id}','ProductBookingController@productBooking')->name('productBooking');
    Route::get('/delete/product_booking/{id}', 'ProductBookingController@productbookingDelete')->name('deleteProductBooking');
    Route::get('/product/edit/status/{id}','ProductBookingController@edit')->name('editStatus.productBooking');
    Route::post('update/product_booking/status','ProductBookingController@update')->name('update.ProductBooking');

    Route::get('/status-change/{id}','BookingController@statusChangeForBooking')->name('statusChangePage');
    Route::post('status_change','BookingController@bookingStatusStore')->name('statusChangeOpt');
    Route::get('/booking/delete/{id}', 'BookingController@delete')->name('bookingDelete');

    Route::get('/area/view','AreaController@show')->name('showArea');
    Route::get('/area/add','AreaController@index')->name('addArea');
    Route::post('store-area', 'AreaController@store');
    Route::get('/area/edit/{area}','AreaController@edit')->name('editArea');
    Route::post('/update-area','AreaController@update')->name('updateArea');
    Route::get('/area/delete/{id}','AreaController@delete')->name('deleteArea');

    Route::get('/category/view', 'CategoryController@view')->name('showCategory');
    Route::get('/category/delete/{id}', 'CategoryController@delete')->name('deleteCategory');
    Route::get('/category/add','CategoryController@index')->name('addCategory');
    Route::post('store-category', 'CategoryController@store');

    Route::get('/show/product','ProductController@index')->name('showProduct');
    Route::get('/add/product','ProductController@add')->name('addProduct');
    Route::post('store-product', 'ProductController@store')->name('storeProduct');
    Route::get('/product/delete/{id}', 'ProductController@delete')->name('deleteProduct');
    Route::get('/products','ProductController@allproduct')->name('allProduct');
    Route::get('/product/{productUrl}', 'ProductController@productSee')->name('productSee');
    Route::get('/product/edit/{product}','ProductController@edit')->name('editProduct');
    Route::post('/update/product','ProductController@update')->name('updateProduct');

    Route::get('/doctor/service', 'DoctorContactController@create')->name('contact.doctor_form');
    Route::post('doctor-service', 'DoctorContactController@store')->name('contact.store_doctor');
    //  Nursing Service Page
    Route::get('/contact/service/nursing','ContactFormController@create')->name('contact.form');
    Route::post('/contact-store','ContactFormController@store')->name('contact.store');
    Route::get('/contact/delete/{id}', 'ContactFormController@delete')->name('deleteContactForm');
    // Admin Custom Data Save
    Route::get( '/show/custom_information', 'AdminFormController@show')->name('showCustomData');
    Route::get( '/add/custom_information', 'AdminFormController@index')->name('indexCustomData');
    Route::post('/save-custom_data','AdminFormController@store')->name('saveData');
    Route::get('/custom_data/delete/{id}', 'AdminFormController@destroy')->name('deleteCustomData');
    Route::get('/edit/custom_data/{id}','AdminFormController@edit')->name('editCustomData');
    Route::post('/update/custom-data','AdminFormController@update')->name('updateCustomData');

/*
|--------------------------------------------------------------------------
|                           Doctor Routes
|--------------------------------------------------------------------------
*/
Route::group(['as'=>'doctor.', 'prefix' => 'doctor', 'namespace' => 'Doctor', 'middleware' =>['auth', 'doctor']], function() {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile/settings', 'DashboardController@profile_seetings')->name('doctorProfileSeetings');
    Route::post('profile/update/pic', 'DashboardController@updateProfilePic')->name('update.profile_pic');
    Route::post('profile/update', 'DashboardController@profileSettings')->name('upadeteprofileSeetings');

});
    Route::get('/change-password','CustomAuthController@passwordChange')->name('password.change');
    Route::post('/change-password', 'CustomAuthController@FormPassChange')->name('passwordFrom');
    Route::get('/custom/login', 'CustomAuthController@showPage')->name('customDoctorLogin');
    Route::post('custom-login', 'CustomAuthController@login');
    Route::get("doctor/register", "DoctorController@signUpForm")->name("doctorSignUpForm");
    Route::post("doctor/signup", "DoctorController@signUpFormSubmit")->name("doctorSignUpFormSubmit");

    Route::get('profile/{username}' , 'ProfileController@show')->name('profile.show');


/*
|--------------------------------------------------------------------------
|                               Nurse Routes
|--------------------------------------------------------------------------
*/

Route::group(['as'=>'nurse.' ,'prefix' => 'nurse', 'namespace' => 'Nurse', 'middleware' =>['auth', 'nurse']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    // Nurse Auth Controller
    Route::get('change-password',   'NurseAuthController@changePasswordPage')->name('nursePassChange');
    Route::post('change-password',  'NurseAuthController@changePasswordAction')->name('nursePassChangeAction');
    // Profile Picture & Settings Update
    Route::post('profile_pic/upload',  'NurseProfileController@nurse_picUpdate')->name('nursePicUpdate');
    Route::get('/profile/settings',    'NurseProfileController@settings_page')->name('nurse_ProfilePage');
    Route::post('/profile/update',     'NurseProfileController@profile_update')->name('profileAllUpdate');
});
Route::get('nurse/register',      'Nurse\NurseAuthController@nurseSignUpForm')->name("nurse.signup");
Route::post('nurse/signup',     'Nurse\NurseAuthController@registerNurse')->name('nurse.signup_page');

/*
|--------------------------------------------------------------------------
|                               User Routes
|--------------------------------------------------------------------------
*/
Route::group(['as'=>'user.' ,'prefix' => 'user', 'namespace' => 'User', 'middleware' =>['auth', 'user']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
|                            Search & Booking
|--------------------------------------------------------------------------
*/
Route::get('/search/your/doctor', 'SearchController@search')->name('search.doctor');
Route::get('/search/doctor', 'SearchController@search_doctor')->name('search.doctorProfile');

Route::get('booking/confirmation/{id}/done','BookingController@booking_confirmation')->name('booking.confirmation');
Route::get('/booking-show','BookingController@showbooking')->name('bookingShow');

Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');



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
require __DIR__.'/auth.php';

/* Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    $cache = 'Route cache cleared <br /> View cache cleared <br /> Cache cleared <br /> Config cleared <br /> Config cache cleared';
    return $cache;
}); */

Route::get('/', 'WebController@index');
Route::get('about', 'WebController@about')->name('about');
Route::get('contact', 'WebController@contact')->name('contact');
Route::get('services', 'WebController@services')->name('services');
Route::get('prices', 'WebController@prices')->name('prices');
Route::get('care-points', 'WebController@carePoints')->name('care-points');
Route::post('subscriber/store', 'WebController@subscriberStore')->name('subscriber.store');

//Admin login
Route::get('admin/login', 'Admin\AdminController@login')->name('admin.login');
Route::post('authenticate', 'Admin\AdminController@authenticate')->name('authenticate');
Route::get('/admin/profile/edit', 'Admin\AdminController@editProfile')->name('admin.profile.edit');
Route::post('/admin/profile/update', 'Admin\AdminController@updateProfile')->name('admin.profile.update');
Route::post('admin/logout', 'Admin\AdminController@logOut')->name('admin.logout');

//admin reset password
Route::get('admin/forgot_password', 'Admin\AdminController@forgotPassword')->name('admin.forgot_password');
Route::get('admin/send-password-reset-link', 'Admin\AdminController@passwordResetLink')->name('admin.send-password-reset-link');
Route::get('admin/reset-password/{token}', 'Admin\AdminController@resetPassword')->name('admin.reset-password');
Route::post('admin/change_password', 'Admin\AdminController@changePassword')->name('admin.change_password');

//Home
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Roles
Route::resource('role', 'Admin\RoleController');

//users
Route::resource('user', 'Admin\UserController');

//permissions
Route::resource('permission', 'Admin\PermissionController');

//setting
Route::resource('setting', 'Admin\SettingController');

//sliders
Route::resource('slider', 'Admin\SliderController');

//testimonial
Route::resource('testimonial', 'Admin\TestimonialController');

//service
Route::resource('service', 'Admin\ServiceController');

//pages settings
Route::resource('page', 'Admin\PageController');
Route::resource('page_setting', 'Admin\PageSettingController');

//package
Route::resource('package', 'Admin\PackageController');

//team
Route::resource('team', 'Admin\TeamController');

//Coupons
Route::resource('coupon', 'Admin\CouponController');

//mail settings
Route::resource('mail_setting', 'Admin\MailSettingController');

//service bookings
Route::resource('booking', 'BookingController');
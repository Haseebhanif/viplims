<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


if (!Storage::disk('storage')->exists('installed.txt')) {
    Route::get('{any?}', function () {
        {
            sleep('2');
            return redirect('/install');
        }
    });
}

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('index');

Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
});

Auth::routes(['verify' => true]);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('pricing', 'PricingController');
Route::get('/users/registration', 'HomeController@registration')->name('user.registration');
Route::resource('subscribers', 'SubscribersController');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/tryforfree', 'HomeController@tryforfree')->name('tryforfree');
Route::get('/donation', 'HomeController@donation')->name('donation');
Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');
Route::get('/privacypolicy', 'HomeController@privacypolicy')->name('privacypolicy');
Route::get('/terms_&_conditions', 'HomeController@terms_conditions')->name('terms_conditions');
Route::post('/submit_contact_form', 'HomeController@submit_contact_form')->name('submit_contact_form');
Route::get('/user_package/donation_store/{id}', 'UserPackageController@donation_store')->name('user_package.donation_store');
Route::get('/home/approve/{id}/{user_id}', 'HomeController@approve')->name('home.approve');
Route::get('/home/newapprove/{id}/{user_id}', 'HomeController@newapprove')->name('home.newapprove'); 

Route::group(['middleware' => ['auth', 'user']], static function () {
    Route::resource('user', 'UserController');
    Route::resource('user_package', 'UserPackageController');
    Route::get('/user_package/destroy/{id}', 'UserPackageController@destroy')->name('user_package.destroy');
    Route::get('/user_package/store/{id}', 'UserPackageController@store')->name('user_package.store');
    Route::get('/user_package/approve/{id}', 'UserPackageController@approve')->name('user_package.approve');
    Route::get('/user_package/newapprove/{id}', 'UserPackageController@newapprove')->name('user_package.newapprove');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/apppassword', 'HomeController@apppassword')->name('apppassword');
    Route::post('/changepassword', 'HomeController@changepassword')->name('changepassword');
});

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');

Route::get('/page/{slug}', 'PageController@show_custom_page')->name('custom-pages.show_custom_page');

Route::get('/page/the-support-suite', 'PageController@show_custom_page')->name('page.support');


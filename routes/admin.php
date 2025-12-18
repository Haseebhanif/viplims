<?php
use \Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){

    Route::get('/dashboard', 'HomeController@admin_dashboard')->name('admin.dashboard');
    Route::resource('package','PackagesController');
    Route::get('/package/destroy/{id}', 'PackagesController@destroy')->name('package.destroy');
    Route::get('/package/deactivate/{id}', 'PackagesController@deactivate')->name('package.deactivate');
    Route::get('/package/activate/{id}', 'PackagesController@activate')->name('package.activate');

    Route::resource('general_setting','GeneralSettingsController');
    Route::get('/logo','GeneralSettingsController@logo')->name('general_setting.logo');
    Route::post('/logo','GeneralSettingsController@storeLogo')->name('general_setting.logo.store');

    Route::get('/privacypolicy/{type}', 'PolicyController@index')->name('privacypolicy.index');
    Route::post('/policies/store', 'PolicyController@store')->name('policies.store');

    Route::resource('pages', 'PageController');
    Route::get('/pages/destroy/{id}', 'PageController@destroy')->name('pages.destroy');

    Route::get('/home','GeneralSettingsController@home')->name('general_setting.home');
    Route::post('/home','GeneralSettingsController@storeHome')->name('general_setting.home.store');

    Route::resource('users', 'UserController');
    Route::get('/users/destroy/{id}', 'UserController@destroy')->name('users.destroy');

    Route::resource('products', 'ProductController');
    Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('products.destroy');

    Route::resource('subscription', 'SubscriptionController');
    Route::get('/subscription/destroy/{id}', 'SubscriptionController@destroy')->name('subscription.destroy');
    Route::post('/subscription/suspend/{id}', 'SubscriptionController@suspend')->name('subscription.suspend');
    Route::post('/subscription/activate/{id}', 'SubscriptionController@activate')->name('subscription.activate');
    Route::post('/subscription/cancel/{id}', 'SubscriptionController@cancel')->name('subscription.cancel');

    Route::resource('transaction', 'TransactionController');
    Route::get('/transactions/{id}', 'TransactionController@transactions')->name('transactions.transactions');

    Route::resource('slider', 'SliderController');
    Route::resource('cards', 'CardController');

    Route::get('/cards/destroy/{id}', 'CardController@destroy')->name('cards.destroy');
    Route::resource('business_setting', 'BusinessSettingController');

    Route::resource('tabs', 'TabController');
    Route::get('/tabs/destroy/{id}', 'TabController@destroy')->name('tabs.destroy');

    Route::resource('videos', 'VideosController');
    Route::get('/videos/destroy/{id}', 'VideosController@destroy')->name('videos.destroy');

    Route::resource('clients', 'ClientsController');
    Route::get('/clients/destroy/{id}', 'ClientsController@destroy')->name('clients.destroy');
});
Route::resource('subscribers', 'SubscribersController');
Route::get('/subscribers/destroy/{id}', 'SubscribersController@destroy')->name('subscribers.destroy');

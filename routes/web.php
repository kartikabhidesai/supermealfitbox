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
Route::get('clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode1 = Artisan::call('route:clear');
    $exitCode2 = Artisan::call('config:clear');
    $exitCode3 = Artisan::call('view:clear');
    return '<h1>cache route config view cleared</h1>';
});

//
Route::get('/', function () {
    return view('frontend/pages/dashboard');
});

//create password
Route::match(['get', 'post'], 'createpassword', ['as' => 'createpassword', 'uses' => 'frontend\dashboard\DashboardController@createpassword']);
Route::match(['get', 'post'], 'createadmin', ['as' => 'createadmin', 'uses' => 'frontend\dashboard\DashboardController@createadmin']);

//dashboard
Route::match(['get', 'post'], 'home', ['as' => 'home', 'uses' => 'frontend\dashboard\DashboardController@home']);
Route::match(['get', 'post'], 'aboutus', ['as' => 'aboutus', 'uses' => 'frontend\aboutus\aboutusController@index']);
Route::match(['get', 'post'], 'ketodiet', ['as' => 'ketodiet', 'uses' => 'frontend\ketodiet\ketodietController@index']);
Route::match(['get', 'post'], 'musclegain', ['as' => 'musclegain', 'uses' => 'frontend\musclegain\musclegainController@index']);
Route::match(['get', 'post'], 'healthyjuice', ['as' => 'healthyjuice', 'uses' => 'frontend\healthyjuice\healthyjuiceController@index']);
Route::match(['get', 'post'], 'salad', ['as' => 'salad', 'uses' => 'frontend\salad\saladController@index']);
Route::match(['get', 'post'], 'customizemeal', ['as' => 'customizemeal', 'uses' => 'frontend\customizemeal\customizemealController@index']);
Route::match(['get', 'post'], 'smoothies', ['as' => 'smoothies', 'uses' => 'frontend\smoothies\smoothiesController@index']);
Route::match(['get', 'post'], 'contactus', ['as' => 'contactus', 'uses' => 'frontend\contactus\contactusController@index']);

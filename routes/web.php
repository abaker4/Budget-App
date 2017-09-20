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

Route::get('/', 'HomeController@index');

Route::post('/newslettersignup', 'HomeController@newsletterSignUp');



Auth::routes();


Route::get('/home', 'DashboardController@index');

Route::post('/daily_total', 'DashboardController@dailyTotal');

Route::post('/reference_date', 'DashboardController@newReferenceDate');

Route::group(['prefix' => 'onboard', 'middleware' => 'auth'], function () {

    Route::get('/start', 'OnBoardingController@start');

    Route::get('/finish', 'OnBoardingController@finish');


    Route::get('/income', 'OnBoardingController@income');

    Route::get('/housing', 'OnBoardingController@housing');

    Route::get('/utilities', 'OnBoardingController@utilities');

    Route::get('/insurances', 'OnBoardingController@insurances');

    Route::get('/memberships', 'OnBoardingController@memberships');

    Route::get('/savings', 'OnBoardingController@savings');

    Route::get('/savings_percentage', 'OnBoardingController@savingsPercentage');

    Route::post('/store', 'OnBoardingController@store');

    Route::post('/store_saving','OnBoardingController@storeSaving');

    Route::post('/store_saving_percentage','OnBoardingController@storeSavingPercentage');



});




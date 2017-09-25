<?php

//Public Routes
Route::get('/', 'HomeController@index');

Route::post('/newslettersignup', 'HomeController@newsletterSignUp');

Auth::routes();

//Dashboard routes
Route::get('/home', 'DashboardController@index');

Route::post('/daily_total', 'DashboardController@dailyTotal');

Route::post('/reference_date', 'DashboardController@newReferenceDate');

//Onboarding Routes
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




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
    return view('landing');
});

Auth::routes();


Route::get('/home', 'DashboardController@index');


Route::group(['prefix' => 'monthlyexpenses', 'middleware' => 'auth'], function () {

    Route::get('/create_income', 'MonthlyExpensesController@createIncome');

    Route::get('/create_expense', 'MonthlyExpensesController@createExpense');

    Route::get('/create_saving', 'MonthlyExpensesController@createSaving');

    Route::get('/{id}', 'MonthlyExpensesController@show');

    Route::get('/{id}/edit', 'MonthlyExpensesController@edit');


    Route::post('/store_expense', 'MonthlyExpensesController@storeExpense');

    Route::post('/store_saving', 'MonthlyExpensesController@storeSaving');


    Route::post('/update', 'MonthlyExpensesController@update');

    Route::delete('/{id}', 'MonthlyExpensesController@destroy');

});

Route::group(['prefix' => 'dailyexpenses', 'middleware' => 'auth'], function () {

    Route::get('/home', 'DailyExpensesController@index');

    Route::get('/create', 'DailyExpensesController@create');

    Route::get('/{id}', 'DailyExpensesController@show');

    Route::get('/{id}/edit', 'DailyExpensesController@edit');

    Route::post('/daily_total', 'DailyExpensesController@dailyTotal');

    Route::post('/update', 'DailyExpensesController@update');

    Route::delete('/{id}', 'DailyExpensesController@destroy');

});

Route::group(['prefix' => 'onboard', 'middleware' => 'auth'], function () {

    Route::get('/instructions', 'OnBoardingController@instructions');

    Route::get('/1', 'OnBoardingController@income');

    Route::get('/2', 'OnBoardingController@housing');

    Route::get('/3', 'OnBoardingController@utilities');

    Route::get('/4', 'OnBoardingController@insurances');

    Route::get('/5', 'OnBoardingController@memberships');

    Route::get('/6', 'OnBoardingController@groceries');

    Route::get('/7', 'OnBoardingController@gas');

    Route::get('/{id}/edit', 'OnBoardingController@editGas');

    Route::get('/{id}/edit', 'OnBoardingController@editIncome');

    Route::get('/8', 'OnBoardingController@savings');

    Route::post('/storeonboard', 'OnBoardingController@storeOnboard');

    Route::post('/store', 'OnBoardingController@store');

    Route::post('/store_saving','OnBoardingController@storeSaving');


});





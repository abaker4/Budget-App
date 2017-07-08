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
    return view('welcome');
});




Route::get('/home', 'HomeController@index')->name('home');



Route::get('/monthlyexpenses/create', 'MonthlyExpensesController@create');

Route::get('/monthlyexpenses/{id}', 'MonthlyExpensesController@show');

Route::get('/monthlyexpenses/{id}/edit', 'MonthlyExpensesController@edit');

Route::post('/monthlyexpenses/store', 'MonthlyExpensesController@store');

Route::post('/monthlyexpenses/update', 'MonthlyExpensesController@update');

Route::delete('/monthlyexpenses/{id}', 'MonthlyExpensesController@destroy');





Route::get('/dailyexpenses/create', 'DailyExpensesController@create');

Route::get('/dailyexpenses/{id}', 'DailyExpensesController@show');

Route::get('/dailyexpenses/{id}/edit', 'DailyExpensesController@edit');

Route::post('/dailyexpenses/store', 'DailyExpensesController@store');

Route::post('/dailyexpenses/update', 'DailyExpensesController@update');

Route::delete('/dailyexpenses/{id}', 'DailyExpensesController@destroy');


Auth::routes();

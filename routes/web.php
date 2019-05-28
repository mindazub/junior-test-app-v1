<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);



Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'CompanyController@index')->name('home');
    Route::resource('company', 'CompanyController');
    Route::resource('employee', 'EmployeeController');

});

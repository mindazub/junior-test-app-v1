<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);



Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'CompanyController@index')->name('home');
    Route::resource('company', 'CompanyController');
    Route::resource('employee', 'EmployeeController');

    Route::group(['prefix' => 'dashboard'], function() {
        Route::get('/', 'DashboardController@index')->name('datatables.data');
        Route::get('employee', 'DashboardController@employee')->name('employee.data');
        Route::get('company', 'DashboardController@company')->name('company.data');
    });


});

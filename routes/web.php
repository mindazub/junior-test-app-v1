<?php

Route::get('/', function() {
    return redirect(app()->getLocale());
});


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setLocale',
], function() {


    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes(['register' => false]);


    Route::group(['middleware' => 'auth'], function () {

        Route::get('/home', 'CompanyController@index')->name('home');

        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', 'DashboardController@index')->name('dashboard.data');
            Route::get('users-datatable', 'DashboardController@users')->name('users.data');
            Route::get('employee-datatable', 'DashboardController@employee')->name('employee.data');
            Route::get('company-datatable', 'DashboardController@company')->name('company.data');

            Route::post('/searchCompany', 'SearchController@searchCompany')->name('search.company');
            Route::post('/searchEmployee', 'SearchController@searchEmployee')->name('search.employee');
            Route::post('/searchUser', 'SearchController@searchUser')->name('search.user');

            Route::resource('company', 'CompanyController');
            Route::resource('employee', 'EmployeeController');
            Route::resource('user', 'UserController');
        });
    });

});


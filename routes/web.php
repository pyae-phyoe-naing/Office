<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(
    ['register' => false]
);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'PageController@home')->name('home');
    Route::resource('employee', 'EmployeeController');
    Route::get('employee/datatable/ssd', 'EmployeeController@ssd');

    Route::get('profile', 'ProfileController@index')->name('profile.profile');
});

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(
    ['register' => false]
);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'PageController@home');
    Route::resource('employee', 'EmployeeController');
    Route::get('employee/datatable/ssd','EmployeeController@ssd');
});

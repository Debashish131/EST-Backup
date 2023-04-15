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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/employeeInfo', 'HomeController@EmployeeInfo');
Route::Post('/storeData', 'EmployeeController@storeData');
Route::get('/emlogout', 'HomeController@logout');
Route::get('/leaveApplication', 'EmployeeController@leaveApplication');
Route::post('/storeLeave', 'LeaveController@storeLeave');
Route::get('/showLeave', 'LeaveController@showLeave');


//Admin
Route::namespace("Admin")->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::namespace('Auth')->group(function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
    });
});
Route::get('/hremployeeInfo', 'Admin\HomeController@EmployeeInfo');
Route::get('/showinfo', 'Admin\HomeController@showInfo');


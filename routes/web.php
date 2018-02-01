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
Route::get('expenselist', 'Homecontroller@expenselist');
Route::get('holidaylist', 'Homecontroller@holidaylist');
Route::get('markAttendance', 'Homecontroller@markAttendance');
Route::get('viewAttendance', 'Homecontroller@viewAttendance');
Route::get('leaveTypes','Homecontroller@leaveTypes');
Route::get('applicationlist', 'Homecontroller@applicationlist');
Route::get('generalSetting', 'Homecontroller@generalSetting');
Route::get('profileSetting', 'Homecontroller@profileSetting');
Route::get('notificationSetting', 'Homecontroller@notificationSetting');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('employees', 'EmployeeController');
Route::resource('departments', 'DepartmentController');
Route::resource('awards', 'AwardController');
Route::resource('notices', 'NoticeController');
Route::resource('holidays', 'HolidayController');
Route::resource('leaveapplications', 'LeaveApplicationController');

// Route::get('employeelist', 'EmployeeController@employeelist');
// Route::get('addEmployee','EmployeeController@addEmployee');



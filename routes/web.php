<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


//Student routes
Route::get('/portals/student/index', [
    'uses' => 'StudentsController@index',
    'as' => 'portals.student.index'
]);

Route::get('/portals/student/announcement', [
    'uses' => 'StudentsController@announcement',
    'as' => 'portals.student.announcement'
]);

Route::get('/portals/student/courses', [
    'uses' => 'StudentsController@courses',
    'as' => 'portals.student.courses'
]);

Route::get('/portals/student/grade', [
    'uses' => 'StudentsController@grade',
    'as' => 'portals.student.grade'
]);

Route::get('/portals/student/profile', [
    'uses' => 'StudentsController@profile',
    'as' => 'portals.student.profile'
]);

Route::get('/portals/student/evaluation', [
    'uses' => 'StudentsController@evaluation',
    'as' => 'portals.student.evaluation'
]);

Route::get('/portals/student/register', [
    'uses' => 'StudentsController@register',
    'as' => 'portals.student.register'
]);

Route::get('/portals/student/report', [
    'uses' => 'StudentsController@report',
    'as' => 'portals.student.report'
]);


//registrar routes
Route::get('/portals/registrar/index', [
    'uses' => 'RegistrarController@index',
    'as' => 'portals.registrar.index'
]);

Route::get('/portals/registrar/register', [
    'uses' => 'RegistrarController@register',
    'as' => 'portals.registrar.register'
]);

Route::post('/portals/registrar/student-history', [
    'uses' => 'RegistrarController@recordHistory',
    'as' => 'portals.registrar.student-history'
]);

Route::post('/portals/registrar/create-account', [
    'uses' => 'RegistrarController@createAccount',
    'as' => 'portals.registrar.create-account'
]);

Route::get('/portals/registrar/account', [
    'uses' => 'RegistrarController@account',
    'as' => 'portals.registrar.account'
]);

Route::get('/portals/registrar/manage', [
    'uses' => 'RegistrarController@manage',
    'as' => 'portals.registrar.manage'
]);

Route::get('/portals/registrar/grades', [
    'uses' => 'RegistrarController@grade',
    'as' => 'portals.registrar.grades'
]);

Route::get('/portals/registrar/evaluations', [
    'uses' => 'RegistrarController@evaluation',
    'as' => 'portals.registrar.evaluations'
]);

Route::get('/portals/registrar/announcement', [
    'uses' => 'RegistrarController@announcement',
    'as' => 'portals.registrar.announcement'
]);

Route::get('/portals/registrar/students', [
    'uses' => 'RegistrarController@students',
    'as' => 'portals.registrar.students'
]);

Route::get('/portals/registrar/student/{id}', [
    'uses' => 'RegistrarController@student',
    'as' => 'portals.registrar.student'
]);

Route::get('/portals/registrar/edit/{id}', [
    'uses' => 'RegistrarController@editHistory',
    'as' => 'portals.registrar.edit'
]);

Route::post('/portals/registrar/student-history-update/{id}', [
    'uses' => 'RegistrarController@updateHistory',
    'as' => 'portals.registrar.student-history-update'
]);

Route::post('/portals/registrar/account-create/{id}', [
    'uses' => 'RegistrarController@createAccount',
    'as' => 'portals.registrar.account-create'
]);

Route::post('/portals/registrar/announcement', [
    'uses' => 'RegistrarController@createAnnouncement',
    'as' => 'portals.registrar.announcement'
]);

//instructor routes

//instructor's profile view route
Route::get('/portals/instructor/profile', [
    'uses' => 'InstructorsController@index',
    'as' => 'portals.instructor.profile'
]);

Route::get('/portals/instructor/profile/edit/{id}', [
    'uses' => 'InstructorsController@edit',
    'as' => 'portals.instructor.profile.edit'
]);
Route::post('/portals/instructor/profile/update/{id}', [
    'uses' => 'InstructorsController@update',
    'as' => 'portals.instructor.profile.update'
]);

//grade submit page by the instructor
Route::get('/portals/instructor/grade', [
    'uses' => 'InstructorsGradeController@create',
    'as' => 'portals.instructor.grade'
]);

Route::get('/portals/instructor/index', [
    'uses' => 'InstructorsGradeController@index',
    'as' => 'portals.instructor.index'
]);


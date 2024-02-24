<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['api', 'cors']], function () {
    Route::get('/', function () {
        return view('sample');
    });

    // Route::post('/regist', function () {
    //     return view('regist_subject');
    // });

    // ユーザー
    Route::get('/getUserById', 'App\Http\Controllers\UsersController@getById')->name('users_getById');
    Route::post('/registUser', 'App\Http\Controllers\UsersController@create')->name('users_create');


    // 課題
    Route::post('/registTask', 'App\Http\Controllers\TasksController@create')->name('tasks_create');
    Route::get('/getTasksById', 'App\Http\Controllers\TasksController@getById')->name('tasks_getById');
    Route::get('/getTasksBySubjectId', 'App\Http\Controllers\TasksController@getBySubjectId')->name('tasks_getBySubjectId');

    // 科目マスタ
    Route::post('/registSubject', 'App\Http\Controllers\SubjectMasterController@create')->name('subjectmaster_create');
    Route::get('/getSubjectAll', 'App\Http\Controllers\SubjectMasterController@getAll')->name('subjectmaster_getAll');
    Route::get('/getSubjectById', 'App\Http\Controllers\SubjectMasterController@getById')->name('subjectmaster_getById');
    Route::post('/deleteSubject', 'App\Http\Controllers\SubjectMasterController@delete')->name('subjectmaster_delete');
});

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

Route::resource('/', 'PagesController');

Auth::routes();



Route::prefix('admin-panel')->group(function() {
    Route::get('/', 'AdminController@index');

    Route::resource('/academics', 'AcademicsController');

    Route::resource('/studentinfo', 'StudentinfoController');

    Route::resource('/courses', 'CoursesController');

    Route::resource('/comments', 'CommentsController');
});

Route::get('/admin-logout',function(){
    Auth::logout();
    return redirect('login');
});


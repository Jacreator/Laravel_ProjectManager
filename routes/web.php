<?php

use Illuminate\Support\Facades\Route;

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

// comment route
Route::resource('comment', 'Comment\CommentController');

// Companies Route
Route::resource('companies', 'Companies\CompaniesController');

// project route
Route::resource('project', 'Project\ProjectController');

// role route
Route::resource('role', 'Role\RoleController');

// task route
Route::resource('task', 'Task\TaskController');

// user route
Route::resource('user', 'User\UserController');

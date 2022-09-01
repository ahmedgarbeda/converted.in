<?php

use Illuminate\Support\Facades\Route;

$path = 'App\Http\Controllers';
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

Route::get('login',$path.'\AuthController@openLoginPage')->name('login');
Route::post('login',$path.'\AuthController@login')->name('doLogin');

Route::middleware('auth')->group(function () use ($path){
    Route::get('/',$path.'\StatisticsController@index')->name('index');
    Route::get('logout',$path.'\AuthController@logout')->name('logout');
    Route::resource('task',$path.'\TasksController');
    Route::get('datatables/tasks',$path.'\TasksController@datatables');
    Route::get('get-users',$path.'\UsersController@getUsers')->name('get-users');
});

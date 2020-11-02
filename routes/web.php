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

Route::get('/admin', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->middleware("guest");

Route::group(['prefix' => '/admin'], function() {

    Route::get('/dashboard', 'App\Http\Controllers\AdminController@index')->name("admin.dashboard");
    Route::get('/content/edit/{pageContent}', 'App\Http\Controllers\AdminController@showForm')->name("admin.content.edit");
    Route::patch('/content/edit/{pageContent}', 'App\Http\Controllers\AdminController@update')->name('admin.content.update');
    Route::get('/configuration', 'App\Http\Controllers\ConfigurationController@index')->name("admin.configuration");
    Route::patch('/configuration', 'App\Http\Controllers\ConfigurationController@update')->name('admin.configuration.update');

    Auth::routes([
        'register' => false,
        'reset' => false,
        'verify' => false
    ]);

});

Route::get('/{any}', 'App\Http\Controllers\GeneralController@index')->where("any", ".*")->name("home");

Route::post('/content/{pageName}', [App\Http\Controllers\PageContentController::class, 'find'])->name('content.find');




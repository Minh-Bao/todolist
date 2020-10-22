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

Route::get('/projects', 'App\http\Controllers\ProjectController@index')->name('projects.index');

Route::group(['auth:sanctum', 'verified'], function() {
    Route::get('/project/{id}', 'App\http\Controllers\ProjectController@show')->name('projects.show');
    Route::get('/dashboard', function() {
        return Inertia\Inertia::render('Dashboard');
    })->name('dashboard');
});

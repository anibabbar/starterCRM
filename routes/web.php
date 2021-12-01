<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TodoController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('clients', ClientsController::class)->middleware('auth');
Route::resource('lead', LeadController::class)->middleware('auth');
Route::resource('services', ServicesController::class)->middleware('auth');
Route::resource('todo', TodoController::class)->middleware('auth');

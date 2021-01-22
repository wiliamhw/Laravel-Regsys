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

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::get('contact', [App\Http\Controllers\ContactController::class, 'show'])->middleware('auth');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'store'])->middleware('auth');

Route::get('payments', [App\Http\Controllers\PaymentsController::class, 'create'])->middleware('auth');
Route::post('payments', [App\Http\Controllers\PaymentsController::class, 'store'])->middleware('auth');

Route::get('notifications', [App\Http\Controllers\UserNotificationsController::class, 'show'])
    ->middleware('auth');
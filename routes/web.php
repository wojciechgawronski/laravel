<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
use \App\Http\Controllers\ServiceController;
use \App\Http\Controllers\CustomerController;

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

Route::get('/email', function () {
    \Illuminate\Support\Facades\Mail::to("wojciech@gawronsky.com.pl")->send(new \App\Mail\WelcomeMail());
    return new \App\Mail\WelcomeMail();
});

//Route::get('/', [HelloController::class, 'index']);
//Route::get('/services', [ServiceController::class, 'create']);
Route::get('/services', [ServiceController::class, 'index']);
Route::post('/services', [ServiceController::class, 'store']);
Route::view('/about', 'static_views.about'); // shortcut for only the view

//rest: index - create - store - show - edit - update - destroy
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/customers/{customer}', [CustomerController::class, 'show']);
//Route::get('/customers/customer', [CustomerController::class, 'show']);
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{customer}', [CustomerController::class, 'update']);
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

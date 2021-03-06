<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [UserController::class, "home"]);

Route::get('form', [UserController::class, "form"]);
Route::post('store', [UserController::class, "store"]);

Route::delete('destroy/{id}', [UserController::class, "destroy"]);

Route::get('/show/{id}', [UserController::class, "show"]);
Route::put('update/{id}', [UserController::class, "update"]);

Route::get('/edit/{id}', [UserController::class, "edit"]);
Route::put('updat/{id}', [UserController::class, "updat"]);
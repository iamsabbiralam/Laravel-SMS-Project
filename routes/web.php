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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form', [App\Http\Controllers\HomeController::class, 'create'])->name('form.create');
Route::post('/form', [App\Http\Controllers\HomeController::class, 'store'])->name('form.submit');
Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/result/{id}', [App\Http\Controllers\HomeController::class, 'result'])->name('result.view');
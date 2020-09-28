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
Route::get('/pages', [App\Http\Controllers\PagesController::class, 'index'])->name('pages');
Route::get('/cellulose', [App\Http\Controllers\CelluloseController::class, 'index'])->name('cellulose');
//Route::get('/collect-status', [App\Http\Controllers\CollectStatusController::class, 'index'])->name('collect-status');
Route::get('/collect-status/{factory}', [App\Http\Controllers\CollectStatusController::class, 'index'])->name('collect-status');


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

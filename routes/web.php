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

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit',[App\Http\Controllers\ProfilesController::class,'edit'])->name('profile.edit');

Route::get('/p/create',[App\Http\Controllers\PostController::class,'create']);
Route::post('/p',[App\Http\Controllers\PostController::class,'store']);
Route::get('/p/{post}',[App\Http\Controllers\PostController::class,'show']);

Route::patch('/profile/{user}',[App\Http\Controllers\ProfilesController::class,'update'])->name('profile.update');


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


Route::get('/video', [App\Http\Controllers\inx::class, 'video'])->name('video');
Route::get('/member', [App\Http\Controllers\inx::class, 'member'])->name('member');
Route::get('/article/{id}', [App\Http\Controllers\inx::class, 'article'])->name('article')->where('id', '[1-6]');
Route::get('/post/{id}', [App\Http\Controllers\inx::class, 'post'])->name('post')->where('id', '[0-9]+');

//Auth::routes();
Route::get('/', [App\Http\Controllers\inx::class, 'show'])->name('show');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/assets', function () {
    Artisan::call('storage:link');
});

Route::group(['prefix' => 'supa'], function () {
    Voyager::routes();
});

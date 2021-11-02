<?php

use App\Http\Controllers\MessageController;
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

Route::view('/','index')->name('index');
Route::view('/office','office')->name('office');
ROute::view('/about','about')->name('about');
ROute::view('/news','news')->name('news');
Auth::routes([
        'confirm' => false,
        'login' => true,
        'logout' => true,
        'register' => false,
        'reset' => false,
        'verify' => false
]);



Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('messages/index', [MessageController::class, 'index'])->name('messages.index');
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('contacts', \App\Http\Controllers\ContactController::class);
    Route::resource('posts',\App\Http\Controllers\PostController::class);
});


Route::post('/', [MessageController::class, 'store'])->name('messages.store');

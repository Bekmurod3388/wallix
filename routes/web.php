<?php

use App\Http\Controllers\BladeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::view('/','index')->name('index');
Route::view('/about','about')->name('about');
Route::view('session','session')->name('session');
Route::view('trustelem','trustelem')->name('trustelem ');
Route::view('bastion','bastion')->name('bastion');

Route::view('solution4','solutions.solution4')->name('solution4');
Route::view('solution3','solutions.solution3')->name('solution3');
Route::view('solution2','solutions.solution2')->name('solution2');
//Route::view('solution1','solution1')->name('solution1');
Route::view('trustelemdemo','trustelemdemo')->name('turestelemdemo');
Route::view('health','health')->name('health');
Route::view('devops','devops')->name('devops');
Route::view('cyber','cyber')->name('cyber');
Route::view('bestsafedemo','bestsafedemo')->name('bestsafedemo');
Route::view('bestsafe','bestsafe')->name('bestsafe');
Route::view('bastion6','bastion6')->name('bastion6');
Route::view('bastion5','bastion5')->name('bastion5');
Route::view('bastion4','bastion4')->name('bastion4');
Route::view('bastion3','bastion3')->name('bastion3');
Route::view('bastion2','bastion2')->name('bastion2');
Route::view('bastion1','bastion1')->name('bastion1');
Route::view('authdemo','authdemo')->name('authdemo');
Route::view('auth','auth')->name('auth');
Route::view('accessdemo','accessdemo')->name('accessdemo');

Route::get('/', [App\Http\Controllers\BladeController::class, 'index'])->name('index');
Route::get('news', [App\Http\Controllers\PostController::class, 'news'])->name('news');
Route::post('/', [MessageController::class, 'store'])->name('messages.store');
Route::get('office', [App\Http\Controllers\OfficeController::class, 'office'])->name('office');
Route::get('solution', [BladeController::class, 'solution'])->name('solution');
Route::get('solution/{solution}', [App\Http\Controllers\BladeController::class, 'show'])->name('solution-item');
Route::get('mews/{post}', [App\Http\Controllers\BladeController::class, 'news'])->name('news-item');
Route::get('product', [BladeController::class, 'product'])->name('product');
Route::get('product/{product}', [BladeController::class, 'product'])->name('product-item');


Route::get('/news',[App\Http\Controllers\PostController::class, 'news'])->name('news');
Auth::routes([
    'confirm' => false,
    'login' => true,
    'logout' => true,
    'register' => false,
    'reset' => false,
    'verify' => false
]);

/* Admin */
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('messages/index', [MessageController::class, 'index'])->name('messages.index');
    Route::get('messages/show/{message}',[MessageController::class,'show'])->name('message.show');
    Route::delete('messages/delete/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('office',App\Http\Controllers\OfficeController::class);
    Route::resource('solution',App\Http\Controllers\SolutionController::class);
    Route::resource('category',App\Http\Controllers\CategoreController::class);
    Route::resource('product',App\Http\Controllers\ProductController::class);
});

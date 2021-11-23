<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;


Route::view('/','index')->name('index');
Route::view('/session','extra.session')->name('session');

Route::view('/trustelemdemo','trustelemdemo')->name('turestelemdemo');
Route::view('/health','extra.health')->name('health');
Route::view('/devops','devops')->name('devops');
Route::view('/cyber','cyber')->name('cyber');
//Route::view('bestsafedemo','bestsafedemo')->name('bestsafedemo');

# Products
Route::get('/product', [BladeController::class, 'product'])->name('product');
Route::get('/product/{product}', [BladeController::class, 'product'])->name('product-item');
Route::view('/products/bastion', 'products.bastion')->name('bastion');
Route::get('/products/bestsafe',[App\Http\Controllers\ProductController::class, 'bestsafe'])->name('bestsafe');
Route::get('/products/trustelem', [App\Http\Controllers\ProductController::class, 'trustelem'])->name('trustelem');
//Route::view('bastion6','bastion6')->name('bastion6');
//Route::view('bastion5','bastion5')->name('bastion5');
//Route::view('bastion4','bastion4')->name('bastion4');
//Route::view('bastion3','bastion3')->name('bastion3');
Route::view('bastion2','bastion2')->name('bastion2');
//Route::view('bastion1','bastion1')->name('bastion1');


# Solutions
//Route::get('/solution', [BladeController::class, 'solution'])->name('solution');
//Route::get('/solution/{solution}', [App\Http\Controllers\BladeController::class, 'show'])->name('solution-item');
Route::view('/solutions/1','solutions.solution1')->name('solution1');
Route::get('/solutions/2', [App\Http\Controllers\SolutionController::class, 'audit'])->name('solution2');
Route::view('/solutions/3','solutions.solution3')->name('solution3');
Route::view('/solutions/4','solutions.solution4')->name('solution4');
Route::view('/solutions/5','solutions.solution5')->name('solution5');

# Auth
Route::view('/authdemo','products.authdemo')->name('authdemo');
Route::view('/auth','products.auth')->name('auth');
Route::view('/accessdemo','products.accessdemo')->name('accessdemo');

# News
Route::get('/', [App\Http\Controllers\BladeController::class, 'index'])->name('index');
Route::get('/news',[App\Http\Controllers\PostController::class, 'news'])->name('news');
Route::get('/news/{post}', [App\Http\Controllers\BladeController::class, 'newsItem'])->name('news-item');

# About & Contact
Route::get('/about-us', [App\Http\Controllers\OfficeController::class, 'about'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\OfficeController::class, 'contact'])->name('contact');
Route::post('/', [MessageController::class, 'store'])->name('messages.store');


# Admin
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
    Route::get('messages/show/{message}',[MessageController::class,'show'])->name('message.show');
    Route::delete('messages/delete/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('office',App\Http\Controllers\OfficeController::class);
    Route::resource('solution',App\Http\Controllers\SolutionController::class);
    Route::resource('category',App\Http\Controllers\CategoreController::class);
    Route::resource('product',App\Http\Controllers\ProductController::class);
});

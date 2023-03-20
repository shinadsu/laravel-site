<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// панель laravel
Route::get('/', function () {
    return view('welcome');
});

// работа с постами
Route::group(['namespace'=>'App\Http\Controllers\Post'], function(){
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts', 'indexController')->name('post.index');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
});



// Админ панель
Route::group(['namespace'=>'App\Http\Controllers\Admin'], function(){
    Route::get('/admin', 'AdminController')->name('admin.index');
    Route::get('/admin/post', 'indexController')->name('admin.index');
    Route::get('/admin/post/create', 'CreateController')->name('admin.create');
    Route::post('/admin', 'StoreInDatabaseController')->name('admin.StoreInDatabaseController');

});


// нвигационная панель
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/info', 'App\Http\Controllers\InfoController@index')->name('info.index');



// антификация laravel 
Auth::routes(); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

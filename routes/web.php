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

Route::group(['namespace' => 'Post'], function (){
    Route::get('/posts', "IndexController")->name('post.index');
    Route::post('/posts', "StoreController")->name('post.store');
    Route::post('/search', "SearchController")->name('post.search');
    Route::get('/posts/{post}', "ShowController")->name('post.show');
    Route::patch('/posts/{post}', "UpdateController")->name('post.update');
    Route::delete('/posts/{post}', "DeleteController")->name('post.delete');
    Route::patch('/posts/like/{post}', "LikesController")->name('post.likes');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function (){
    Route::group(['namespace' => 'Dashboard'], function (){
        Route::get('/dashboard', 'IndexController')->name('admin.dashboard.index');
    });
    Route::group(['namespace' => 'Post'], function (){
        Route::get('/post', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::get('/trash', 'TrashController')->name('admin.post.trash');
        Route::post('/search', "SearchController")->name('admin.post.search');
        Route::get('/restore/{res}', 'RestoreController')->name('admin.post.restore');
        Route::get('/posts/{post}/edit', "EditController")->name('admin.post.edit');
    });
    Route::group(['namespace' => 'User'], function (){
        Route::get('/user', 'IndexController')->name('admin.user.index');
        Route::delete('/user/{user}', 'DeleteController')->name('admin.user.delete');
    });
});

Route::get('/', "MainController@index")->name('main.index');
Route::get('/about', "AboutController@index")->name('about.index');
Route::get('/error', "ErrorController")->name('error.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

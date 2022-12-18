<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
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


// super admin routes
Route::group(['middleware'=>'can:delete posts'],function(){
 Route::resource('users' ,UserController::class);
 Route::resource('roles' ,RoleController::class);
Route::delete('/posts/{post}',[PostController::class, 'destroy'])->name('posts.destroy');
});


Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create')->middleware('can:create posts');
Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit')->middleware('can:edit posts');
Route::patch('/posts/{post}',[PostController::class, 'update'])->name('posts.update')->middleware('can:edit posts');


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store')->middleware('can:create posts');
Route::get('/posts/{post}',[PostController::class, 'show'])->name('posts.show')->middleware('can:show posts');



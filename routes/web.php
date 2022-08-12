<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Postcontroller;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->middleware('auth')->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users/{id}', [UserController::class, 'show'])->where('id' , '[0-9]+')->name('users.show');

Route::get('/users/{id}/edit', [UserController::class, 'edit'])->where('id' , '[0-9]+')->middleware('auth')->name('users.edit');

Route::put('/users/{id}', [UserController::class, 'update'])->where('id' , '[0-9]+')->middleware('auth')->name('users.update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->where('id' , '[0-9]+')->middleware('auth')    ->name('users.destroy');




///////////////////////////////////////////////////////////


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth')->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}', [PostController::class, 'show'])->where('id' , '[0-9]+')->name('posts.show');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->where('id' , '[0-9]+')->middleware('auth')->name('posts.edit');

Route::put('/posts/{id}', [PostController::class, 'update'])->where('id' , '[0-9]+')->middleware('auth')->name('posts.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('auth')->where('id' , '[0-9]+')->name('posts.destroy');

Route::get('/posts/delete', [PostController::class, 'dlist'])->name('posts.dlist');

Route::put('/posts/{id}/res', [PostController::class, 'restore'])->middleware('auth')->where('id' , '[0-9]+')->name('posts.restore');
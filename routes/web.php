<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Dashboard
Route::get('/dashboard', [
    UserController::class, 'dashboard'
]) -> name('dashboard');

Route::post('/posts', [PostController::class, 'store']) -> name('posts');
Route::post('/likes', [LikesController::class, 'likeinsert'])->name('likes');


Route::get('/home', [UserController::class, 'home']) -> name('home');
Route::get('/myprofile', [UserController::class, 'myprofile']) -> name('myprofile');
Route::post('/addfriend', [UserController::class, 'addfriend']) -> name('addfriend');
Route::get('/logout', [UserController::class, 'logout']) -> name('logout');



// Register 
Route::get('/register', [
    RegisterController::class, 'index'
]) -> name('register');
Route::post('/register', [
    RegisterController::class, 'store'
]);


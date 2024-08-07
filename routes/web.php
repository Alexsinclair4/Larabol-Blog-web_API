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
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/another', function () {
    return view('hello');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
    Route::get('/update', [Usercontroller::class, 'updatepassword'])->name('updatepassword');
    Route::post('/update', [Usercontroller::class, 'editpassword'])->name('updatepassword');
    Route::get('/userupdate', [Usercontroller::class, 'userupdate'])->name('userupdate');
    Route::get('/post-create',[PostController::class, 'page'])->name('post-create');
    Route::post('/post-create',[PostController::class, 'create'])->name('post-create');
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'signin'])->name('login');

Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'signup'])->name('register');
Route::get('posts',[PostController::class,'getPost'])->name('post');

Route::get('/', [Usercontroller::class, 'home']);

Route::get('/posts/{id}',[PostController::class, 'one']);
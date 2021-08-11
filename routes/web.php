<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorElement;

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


Route::post('accountProcess', [AuthController::class, 'accountProcess'])->name('accountProcess');
Route::post('loginRequest', [AuthController::class, 'loginRequest'])->name('loginRequest');
Route::post('blogPost', [PostController::class, 'blogPost'])->name('blogPost');
// Route::get();

Route::get('/', function () {
    $posts = Post::all();
    return view('welcome', ['posts'=>$posts]);
});
Route::get('hello', function () {
    return view('hello',['name'=>'Teslim','eamil'=>'teslim@mail.com']);
});
Route::get('account/{type}', function ($type) {
    return view('user-access',['type'=>$type]);
});
Route::get('dashboard', function () {
    
    return view('dashboard');
})->middleware('auth');
Route::get('delete/{id}', [PostController::class, 'deletePost']);
Route::get('edit/{id}', [PostController::class, 'editPost']);
Route::post('edit', [PostController::class, 'updatePost']);

Route::get('posts',[PostController::class, 'loadPosts']);
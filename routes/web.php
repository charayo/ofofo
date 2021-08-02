<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', function () {
    return view('hello',['name'=>'Teslim','eamil'=>'teslim@mail.com']);
});
Route::get('account', function () {
    return view('user-access');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
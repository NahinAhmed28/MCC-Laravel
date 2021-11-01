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

Route::get('/', function () {
    return view('home');
});

//start nahin

Route::get('user', [App\Http\Controllers\UserController::class,'index'])->name('user');
Route::get('userdata', [App\Http\Controllers\UserController::class,'show'])->name('userdata');

Route::view('form','form');
Route::post('form', [App\Http\Controllers\MemberController::class,'storeMember'])->name('form');
Route::get('form-show', [App\Http\Controllers\MemberController::class,'showMember'])->name('form-show');

Route::view('employee','employee');
Route::post('employee', [App\Http\Controllers\EmployeeController::class,'storeEmployee'])->name('employee');
Route::get('employee-show', [App\Http\Controllers\EmployeeController::class,'showEmployee'])->name('employee-show');

Route::view('/about', "about")->name('about');
//end nahin

//bappy vai
Route::resource('posts', \App\Http\Controllers\PostController::class);
// end bappy vai



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

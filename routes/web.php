<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rute group
Route::prefix('admin')->group(function(){

    Route::get('hello', function () {
        return "<h1>Hello World</h1>";
    });

    Route::get('jurusan',[App\Http\Controllers\JurusanController::class,'index'])->name('jurusan.index');
});


Route::prefix('users')->group(function(){

    Route::get('hello', function () {
        return "<h1>Hello World</h1>";
    });
});

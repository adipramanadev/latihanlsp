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
    //untuk halaman admin
    Route::get('halamanadmin', function () {
        return "<h1>INi untuk admin</h1>";
    });


});

Route::prefix('users')->group(function(){
    //untuk halaman users
    Route::get('user', function () {
        return "<h1>INi untuk user</h1>";
    });
});

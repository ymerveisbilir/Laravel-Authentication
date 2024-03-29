<?php

use App\Http\Controllers\AuthController;
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
})->name('home');


Route::get('login' , [AuthController::class, 'loginIndex'])->name('login');
Route::post('login' , [AuthController::class, 'login'])->name('login.process');

Route::get('register' , [AuthController::class, 'registerIndex'])->name('register');
Route::post('register' , [AuthController::class, 'register'])->name('register.process');



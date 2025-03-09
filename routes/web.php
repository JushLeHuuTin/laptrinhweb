<?php

use App\Http\Controllers\UseController;
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

Route::get('/home', [UseController::class, 'home'])->name('home');

Route::get('/register', [UseController::class, 'register'])->name('register');

Route::get('/login', [UseController::class, 'login'])->name('login');


Route::get('/loginProcess', [UseController::class, 'loginProcess'])->name('loginProcess');

Route::get('/', function () {
    return view('welcome');
});



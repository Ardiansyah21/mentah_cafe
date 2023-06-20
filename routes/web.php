<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

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

Route::get('/', [CafeController::class, 'index'])->name('index');
Route::get('/create', [CafeController::class, 'create'])->name('create');
Route::get('/data', [CafeController::class, 'data'])->name('data');
Route::get('/login', [CafeController::class, 'login'])->name('login');



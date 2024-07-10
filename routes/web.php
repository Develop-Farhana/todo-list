<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
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
Route::resource('tasks', TaskController::class);

Route::get('login', [AuthController::class, 'index'])->name('admin.login');
Route::post('login', [AuthController::class, 'validate_login'])->name('admin.login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

<?php

use App\Http\Controllers\Admin\BienController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\OptionController;
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
})->name('welcome');

// Auth Routes
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('register', [AuthController::class, 'getRegister'])->name('getRegister');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resources([
        'biens' =>  BienController::class,
        'options' => OptionController::class
    ]);
});

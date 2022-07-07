<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;

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

Route::get('/', [AuthController::class, 'index'])->name('landing');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('registration', [AuthController::class, 'register'])->name('register');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('landing', [AuthController::class, 'landing'])->name('landing');
Route::get('mainpage', [SubjectController::class, 'mainpage'])->name('mainpage');
Route::post('/saveSubject', [SubjectController::class, 'saveSubject'])->name('saveSubject');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
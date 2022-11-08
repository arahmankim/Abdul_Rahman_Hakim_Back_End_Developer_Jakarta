<?php

use App\Http\Controllers\UserController;
use Database\Factories\UserFactory;
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

Route::get('/', [UserController::class, 'homeView']);
Route::get('/signUp', [UserController::class, 'signUpView']);
// Route::post('/storeBike', [UserController::class, 'store']);
Route::get('/admin', [UserController::class, 'adminView']);

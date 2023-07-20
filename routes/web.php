<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\IndustriController;

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
    return view('pages.home');
});

//user routes

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}/info', [UserController::class, 'detail']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::patch('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

//data Industri routes
Route::get('/data/industri', [IndustriController::class, 'index']);

//excel routes
Route::post('/import/industri', [ExcelController::class, 'storeIndustri'])->name('industri.store');

<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/answer_post', [HomeController::class, 'answerPost'])->name('answerPost');
Route::post('/answerSave', [HomeController::class, 'answerSave'])->name('answerSave');
Route::get('/complete', [HomeController::class, 'complete'])->name('complete');
Route::get('/confirm', [HomeController::class, 'confirm'])->name('confirm');
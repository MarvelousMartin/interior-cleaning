<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::any('/', [FrontendController::class, 'index']);
Route::any('/variant/{id}', [FrontendController::class, 'formWithVariant']);
Route::any('/feedback', [FrontendController::class, 'sendFeedbackEmail']);
Route::any('/add-feedback', [FrontendController::class, 'saveFeedback']);

Route::any('/sendEmail', [FrontendController::class, 'sendEmail'])->name('sendEmail');

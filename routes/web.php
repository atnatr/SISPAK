<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;

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
// Public Route
Route::get('/', [DiagnosaController::class, 'index'])->name('diagnosis.index');
Route::post('/diagnosa', [DiagnosaController::class, 'diagnosa'])->name('diagnosis.diagnose');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilCheckController;

Route::get('/', [OilCheckController::class, 'form'])->name('form');
Route::post('/check', [OilCheckController::class, 'check'])->name('check');
Route::get('/result/{oilCheck}', [OilCheckController::class, 'result'])->name('result');
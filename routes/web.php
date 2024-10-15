<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarcelonaController;
use App\Http\Controllers\ViennaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ParisController;
use App\Http\Controllers\CologneController;
use App\Http\Controllers\AthensController;
use App\Http\Controllers\PragueController;
use App\Http\Controllers\AmsterdamController;
use App\Http\Controllers\EdinburghController;


// routes/web.php
Route::get('/barcelona', [BarcelonaController::class, 'show'])->name('barcelona.show');
Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/vienna', [ViennaController::class, 'show'])->name('vienna.show');
Route::get('/paris', [ParisController::class, 'show'])->name('paris.show');
Route::get('/cologne', [CologneController::class, 'show'])->name('cologne.show');
Route::get('/athens', [AthensController::class, 'show'])->name('athens.show');
Route::get('/prague', [PragueController::class, 'show'])->name('prague.show');
Route::get('/amsterdam', [AmsterdamController::class, 'show'])->name('amsterdam.show');
Route::get('/edinburgh', [EdinburghController::class, 'show'])->name('edinburgh.show');
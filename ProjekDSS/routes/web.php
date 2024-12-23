<?php

use App\Http\Controllers\ClassificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NaiveBayesController;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('index');
});

Route::get('/hasil', [DataController::class, 'showData']);
Route::get('/form', [ClassificationController::class, 'index'])->name('classify.form');
Route::post('/classify', [ClassificationController::class, 'classify'])->name('classify.result');
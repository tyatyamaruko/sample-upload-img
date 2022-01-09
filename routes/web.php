<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('upload');
});

Route::post('/upload', [MyController::class, 'store']);

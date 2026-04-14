<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TestResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index'])->name('test');


Route::resource('/test-resource2', TestResourceController::class)->names('test2');

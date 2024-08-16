<?php

use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([HelloMiddleware::class])->group(function () {
    Route::get('/hello', [HelloController::class, 'index'])->name('hello');
    Route::get('/hello/other', [HelloController::class, 'other']);

    // id が数字の場合のみ index を表示する。それ以外は 404エラー にする。
    Route::get('/hello/{id}', [HelloController::class, 'index'])->where('id', '[0-9]+');
});

<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index'])->name('hello');
Route::get('/hello/other', [HelloController::class, 'other']);

// id が数字の場合のみ index を表示する。それ以外は 404エラー にする。
Route::get('/hello/{id}', [HelloController::class, 'index'])->where('id', '[0-9]+');

<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\Sample\SampleController;
use App\Http\Middleware\HelloMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([HelloMiddleware::class])->group(function () {
    Route::get('/hello', [HelloController::class, 'index']);
    Route::post('/hello', [HelloController::class, 'index']);
    // Route::get('/hello/other', [HelloController::class, 'other']);
    Route::get('/hello/{msg}', [HelloController::class, 'other']);

    // id が数字の場合のみ index を表示する。それ以外は 404エラー にする。
    Route::get('/hello/{id}', [HelloController::class, 'index'])->where('id', '[0-9]+');
});

// Sample ディレクトリ以下をまとめて指定できるのが便利
// http://127.0.0.1:8000/sample で SampleController の index が表示される
Route::namespace('Sample')->group(function () {
    Route::get('/sample', [SampleController::class, 'index']);
    Route::get('/sample/other', 'SampleController@other');
});

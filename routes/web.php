<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\Sample\SampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index'])->middleware(App\Http\Middleware\MyMiddleWare::class)->name('hello');

// Sample ディレクトリ以下をまとめて指定できるのが便利
// http://127.0.0.1:8000/sample で SampleController の index が表示される
Route::namespace('Sample')->group(function () {
    Route::get('/sample', [SampleController::class, 'index']);
    Route::get('/sample/other', 'SampleController@other');
});

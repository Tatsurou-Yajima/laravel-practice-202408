<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __construct()
    {
        // config/sample の message を上書きする
        config(['sample.message' => '新しいメッセージ!']);
    }

    public function index(Request $request)
    {
        $sampleMsg = config('sample.message');
        $sampleData = config('sample.data');
        $data = [
            'msg' => $sampleMsg,
            'data' => $sampleData,
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => $request->bye,
        ];
        // hello というルート名を使ってリダイレクトしている
        // return redirect()->route('hello');

        return view('hello.index', $data);
    }
}

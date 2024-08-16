<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => $request->hello,
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    private $fileName;

    public function __construct()
    {
        // config/sample の message を上書きする
        config(['sample.message' => '新しいメッセージ!']);
        $this->fileName = 'sample.txt';
    }

    public function index(Request $request)
    {
        $msg = 'Please input text.';
        $keys = [];
        $values = [];
        if ($request->isMethod('post')) {
            $form = $request->all();
            $keys = array_keys($form);
            $values = array_values($form);
        }
        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        return view('hello.index', $data);
    }

    public function other(string $msg)
    {
        Storage::append($this->fileName, $msg);
        // hello というルート名を使ってリダイレクトしている
        // return redirect()->route('hello');

        return redirect()->route('hello');
    }
}

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
        $sampleMsg = $this->fileName;
        $sampleData = Storage::get($this->fileName);
        $data = [
            'msg' => $sampleMsg,
            'data' => explode(',', $sampleData),
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

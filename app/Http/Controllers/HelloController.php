<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;

class HelloController extends Controller
{
    private $fileName;

    public function __construct()
    {
        // config/sample の message を上書きする
        config(['sample.message' => '新しいメッセージ!']);
        $this->fileName = 'sample.txt';
    }

    public function index(MyService $myService)
    {
        $data = [
            'msg' => $myService->say(),
            'data' => $myService->allData(),
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

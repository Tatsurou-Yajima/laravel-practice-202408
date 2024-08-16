<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(?string $id = null)
    {
        $data = [
            'msg' => 'id = ' . $id,
        ];
        return view('hello.index', $data);
    }

    public function other()
    {
        // hello というルート名を使ってリダイレクトしている
        return redirect()->route('hello');
    }
}

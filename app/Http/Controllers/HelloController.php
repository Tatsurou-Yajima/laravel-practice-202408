<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'This is sample massage.',
        ];
        return view('hello.index', $data);
    }
}

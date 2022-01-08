<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request) {
        $data = [
                  ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
                  ['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
                  ['name'=>'青木大地', 'mail'=>'daiti@yamada'],
                ];
        return view('hello.index', ['message' =>'Hello']);
    }

    public function post(Request $request) {
        return view('hello.index', ['msg'=>$request->msg]);
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  //ここから追加する実装
  public function index()
  {
    $str_1 = 'Hello';
    $str_2 = 'World';
    return view('hello', compact('str_1', 'str_2'));
  }

}

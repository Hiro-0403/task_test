<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class TestController extends Controller
{
    //
    public function index()
    {
        $values = Test::all();

        // dd($values);
        #処理を止めて変数の中身をみることができる。

        return view("tests.test", compact("values"));
    }
}

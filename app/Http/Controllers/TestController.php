<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index()
    {
        $values = Test::all();

        $tests = DB::table("tests")
        ->select("id")
        ->get();

        dd($tests);
        #処理を止めて変数の中身をみることができる。

        return view("tests.test", compact("values"));
    }
}

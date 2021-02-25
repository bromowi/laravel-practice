<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(Request $request){
        $comment = $request->input('comment');
        // $var1 = 1;
        // $var2 = 2;
        // $result = $var1 + $var;
        // return 'ini adalah hasil penjumlahan :'.$result;
        return view('home', ['name' == $comment]);
    }
}
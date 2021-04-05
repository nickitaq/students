<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index() {
       
        return ["message"=> "routing works Nicky"];
    }
    function child2(){
        return view('test.child2');
    }
}

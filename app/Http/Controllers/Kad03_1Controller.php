<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kad03_1Controller extends Controller
{
    //
    public function index(){
        $message ="これはコントローラからブレードに渡したメッセージです";
        return view('Kad03_1',compact('message'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use App\Http\Requests\Kad05_1Request;

class Kad05_1Controller extends Controller
{
    public function index(){
        return view('kad05_1');

    }
    //POSTメソッド
    public function post(Kad05_1Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');
        $request->session()->regenerateToken();
        return view('kad05_2',compact('email','pass'));
    }
}

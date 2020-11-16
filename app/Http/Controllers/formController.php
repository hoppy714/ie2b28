<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class formController extends Controller
{
    //
    public function index(){
        return view('form');
    }
}

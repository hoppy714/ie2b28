<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class Kad03_3Controller extends Controller
{
    //
    public function index(){
        $dt = new Carbon();
        return view('Kad03_3',compact('dt'));
    }
}

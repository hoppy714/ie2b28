<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Kad04_1Controller extends Controller
{
    //
    public function index(){
        $dt = new Carbon();

        function createCalender($dt){
            return view('Kad04_1',compact('dt',''))
            ;
                }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($id){
        return $id.'晩の投稿';
    }
}

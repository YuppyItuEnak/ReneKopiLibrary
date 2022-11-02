<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReneController extends Controller
{
    public function home(){
        return view('Home', [
            "title" => "Homepage"
        ]);
    }
    public function coffee(){
        return view('product', [
            "title" => "Coffees",
            "coffees" => ''
        ]);
    }
}

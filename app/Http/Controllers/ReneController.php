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
    public function product(){
        return view('product', [
            "title" => "Product"
        ]);
    }
    public function about(){
        return view('about', [
            "title" => "About"
        ]);
    }
}

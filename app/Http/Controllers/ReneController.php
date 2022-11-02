<?php

namespace App\Http\Controllers;

use App\Models\Coffees;
use App\Models\Foods;
use App\Models\NonCoffees;
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
            "coffees" => Coffees::allData()
        ]);
    }
    public function showcoffee($code){
        return view('showcoffee', [
            "pagetitle" => "Coffee Details",
            "coffees" => Coffees::allDataWithCode($code)
        ]);
    }
    public function noncoffee(){
        return view('noncoffee', [
            "title" => "Non Coffees",
            "noncoffees" => NonCoffees::allData()
        ]);
    }
    public function shownoncoffee($code){
        return view('shownoncoffee', [
            "pagetitle" => "Non Coffee Details",
            "noncoffees" => NonCoffees::allDataWithCode($code)
        ]);
    }
    public function food(){
        return view('food', [
            "title" => "Food & Snacks",
            "foods" => Foods::allData()
        ]);
    }
    public function showfood($code){
        return view('showfood', [
            "pagetitle" => "Food & Snack Details",
            "foods" => Foods::allDataWithCode($code)
        ]);
    }
}

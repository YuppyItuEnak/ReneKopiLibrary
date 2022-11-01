<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Http\Requests\StoreCoffeeRequest;
use App\Http\Requests\UpdateCoffeeRequest;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCoffeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoffeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function show(Coffee $coffee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function edit(Coffee $coffee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoffeeRequest  $request
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoffeeRequest $request, Coffee $coffee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coffee $coffee)
    {
        //
    }
}

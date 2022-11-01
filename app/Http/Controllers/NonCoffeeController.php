<?php

namespace App\Http\Controllers;

use App\Models\NonCoffee;
use App\Http\Requests\StoreNonCoffeeRequest;
use App\Http\Requests\UpdateNonCoffeeRequest;

class NonCoffeeController extends Controller
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
     * @param  \App\Http\Requests\StoreNonCoffeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNonCoffeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NonCoffee  $nonCoffee
     * @return \Illuminate\Http\Response
     */
    public function show(NonCoffee $nonCoffee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonCoffee  $nonCoffee
     * @return \Illuminate\Http\Response
     */
    public function edit(NonCoffee $nonCoffee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNonCoffeeRequest  $request
     * @param  \App\Models\NonCoffee  $nonCoffee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNonCoffeeRequest $request, NonCoffee $nonCoffee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonCoffee  $nonCoffee
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonCoffee $nonCoffee)
    {
        //
    }
}

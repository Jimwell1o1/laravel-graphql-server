<?php

namespace App\Http\Controllers;

use App\Models\Lights;
use App\Http\Requests\StoreLightsRequest;
use App\Http\Requests\UpdateLightsRequest;

class LightsController extends Controller
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
     * @param  \App\Http\Requests\StoreLightsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLightsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lights  $lights
     * @return \Illuminate\Http\Response
     */
    public function show(Lights $lights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lights  $lights
     * @return \Illuminate\Http\Response
     */
    public function edit(Lights $lights)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLightsRequest  $request
     * @param  \App\Models\Lights  $lights
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLightsRequest $request, Lights $lights)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lights  $lights
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lights $lights)
    {
        //
    }
}

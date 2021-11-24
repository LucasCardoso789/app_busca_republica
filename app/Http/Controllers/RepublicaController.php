<?php

namespace App\Http\Controllers;

use App\Models\Republica;
use App\Http\Requests\StoreRepublicaRequest;
use App\Http\Requests\UpdateRepublicaRequest;

class RepublicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'Yepa';
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
     * @param  \App\Http\Requests\StoreRepublicaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRepublicaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Republica  $republica
     * @return \Illuminate\Http\Response
     */
    public function show(Republica $republica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Republica  $republica
     * @return \Illuminate\Http\Response
     */
    public function edit(Republica $republica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRepublicaRequest  $request
     * @param  \App\Models\Republica  $republica
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRepublicaRequest $request, Republica $republica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Republica  $republica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Republica $republica)
    {
        //
    }
}

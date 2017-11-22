<?php

namespace App\Http\Controllers;

use App\Embarcacion;
use Illuminate\Http\Request;

class EmbarcacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('embarcacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('embarcacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Embarcacion  $embarcacion
     * @return \Illuminate\Http\Response
     */
    public function show(Embarcacion $embarcacion)
    {
        //
        return view('embarcacion.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Embarcacion  $embarcacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Embarcacion $embarcacion)
    {
        //
        return view('embarcacion.edit', compact('embarcacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Embarcacion  $embarcacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Embarcacion $embarcacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Embarcacion  $embarcacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Embarcacion $embarcacion)
    {
        //
    }
}

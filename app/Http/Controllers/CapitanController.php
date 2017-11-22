<?php

namespace App\Http\Controllers;

use App\Capitan;
use Illuminate\Http\Request;

class CapitanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('capitan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('capitan.create');
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
     * @param  \App\Capitan  $capitan
     * @return \Illuminate\Http\Response
     */
    public function show(Capitan $capitan)
    {
        //
        return view('capitan.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Capitan  $capitan
     * @return \Illuminate\Http\Response
     */
    public function edit(Capitan $capitan)
    {
        //
        return view('capitan.edit', compact('capitan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Capitan  $capitan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Capitan $capitan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Capitan  $capitan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capitan $capitan)
    {
        //
    }
}

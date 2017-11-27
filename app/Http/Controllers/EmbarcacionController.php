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
        $embarcaciones = Embarcacion::all();
        return view('embarcacion.index', compact("embarcaciones"));
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
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $path = $request->photo->store('images/embarcacion');
                $params = $request->except("_token");
                $params["photo"] = $path;
                Embarcacion::create($params);
                return redirect('embarcacion');
            }
            else{
                echo "invalid";
            }
        }
        else{
            echo "not file";
        }
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

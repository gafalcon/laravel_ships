<?php

namespace App\Http\Controllers;

use App\Zarpe;
use App\Capitan;
use App\Embarcacion;
use Illuminate\Http\Request;

class ZarpeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->has('embarcacion')) {
            //
            $zarpes = Zarpe::where('embarcacion_id', $request->embarcacion)->get();
            return view('zarpe.index', compact("zarpes"));
        }

        $zarpes = Zarpe::all();
        return view('zarpe.index', compact("zarpes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $capitanes = Capitan::pluck('name', 'id');
        $embarcaciones = Embarcacion::pluck("nombre", 'id');
        return view('zarpe.create', compact(['capitanes', 'embarcaciones']));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Zarpe $zarpe)
    {
        $capitanes = Capitan::pluck('name', 'id');
        $embarcaciones = Embarcacion::pluck("nombre", 'id');
        return view('zarpe.edit', compact(['zarpe', 'capitanes', 'embarcaciones']));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zarpe $zarpe)
    {
        $zarpe->delete();
        return redirect('zarpe');
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Capitan;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $captains = Capitan::all();
        return view('capitan.index', compact("captains"));
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

        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $path = $request->photo->store('images/capitan');
                Capitan::create([
                    "name" => $request->nombre,
                    "fecha_nacimiento" => Carbon::createFromDate($request->año, $request->mes, $request->dia)->toDateString(),
                    "cedula" => $request->cedula,
                    "image" => "/storage/".$path
                ]);

                return redirect('capitan');
            }
            else{
                echo "invalid";
            }
        }else{
            dd($request->all());
            echo "has no file";
        }
        // return dd($request);
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
        echo "Update";
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
        $capitan->delete();
        return redirect('capitan');
        //
    }
}

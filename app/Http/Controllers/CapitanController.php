<?php

namespace App\Http\Controllers;

use App\Capitan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CapitanController extends Controller
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
    public function index()
    {
        //
        $captains = Capitan::all();
        $page_title = "Capitanes";
        return view('capitan.index', compact("captains", "page_title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Capitanes";
        return view('capitan.create', compact("page_title"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page_title = "Capitanes";
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
        $page_title = "Capitanes";
        return view('capitan.show', 'page_title');
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
        $page_title = "Capitanes";
        $fecha_nacimiento = Carbon::parse($capitan->fecha_nacimiento);
        return view('capitan.edit', compact('capitan', 'page_title', 'fecha_nacimiento'));
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
        // dd($request->all());
        // dd($capitan);
        $capitan->name = $request->name;
        $capitan->cedula = $request->cedula;
        $capitan->fecha_nacimiento = Carbon::createFromDate($request->año, $request->mes, $request->dia)->toDateString();


        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $path = $request->image->store('images/capitan');
                $capitan->image = "/storage/".$path;
            }
        }

        $capitan->save();
        return redirect('capitan');
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

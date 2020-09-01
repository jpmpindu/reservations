<?php

namespace App\Http\Controllers;

use App\Representation;
use Illuminate\Http\Request;

class RepresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representations = Representation::all();
        
        return view('representation.index',[
            'representations' => $representations,
            'resource' => 'représentations',
        ]);

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
     * @param  \App\Representation  $representation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $representation = Representation::find($id);
        $date = Carbon::parse($representation->when)->format('d/m/Y');
        $heure = Carbon::parse($representation->when)->format('G:i');
        
        return view('representation.show',[
            'representation' => $representation,
            'date' => $date,
            'heure' => $heure,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Representation  $representation
     * @return \Illuminate\Http\Response
     */
    public function edit(Representation $representation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Representation  $representation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Representation $representation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Representation  $representation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Representation $representation)
    {
        //
    }
}

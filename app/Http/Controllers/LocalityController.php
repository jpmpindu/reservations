<?php

namespace App\Http\Controllers;

use App\Locality;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localities = Locality::all();
        
        return view('locality.index',[
            'localities' => $localities,
            'resource' => 'localities',
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $locality = Locality::find($id);

        return view('locality.show', [
            'locality' => $locality,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Locality  $locality
     * @return \Illuminate\Http\Response
     */
    public function edit(Locality $locality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Locality  $locality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locality $locality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Locality  $locality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locality $locality)
    {
        //
    }
}

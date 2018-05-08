<?php

namespace App\Http\Controllers;

use App\Paseo;
use App\Http\Resources\PaseoResource;
use Illuminate\Http\Request;

class PaseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paseos = Paseo::all();
        return $paseos;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'fecha'         => 'required',
            'localizacion'  => 'required',
            'latitud'       => 'required',
            'longitud'      => 'required',
            'telefono'      => 'required',
            'costo'         => 'required',
            'categoria_id'  => 'required',
        ]);
        $paseo = new Paseo($request->all());
        $paseo->save();

        return $paseo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paseo  $paseo
     * @return \Illuminate\Http\Response
     */
    public function show(Paseo $paseo)
    {
        PaseoResource::withoutWrapping();
        
        return new PaseoResource($paseo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paseo  $paseo
     * @return \Illuminate\Http\Response
     */
    public function edit(Paseo $paseo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paseo  $paseo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paseo $paseo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paseo  $paseo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paseo $paseo)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Paseo;
use App\Categoria;
use App\Http\Resources\PaseoResource;
use Illuminate\Http\Request;

class PaseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $paseos = Paseo::all();
        
        return ['paseos' => $paseos];
    }

    /**
     * Display a few data of Paseo, for a list of paseos into the Mobile App
     *
     * @param   int $id 
     * @return \Illuminate\Http\Response
     */
    public function reduced($id) {
        $paseos = Paseo::where('categoria_id', $id)->get();
        $numberOfPaseos = $paseos->count();
        $response = [];

        for ($i = 0; $i < $numberOfPaseos; $i++)
           $response[$i] = ['id' => $paseos[$i]->id, 'name' => $paseos[$i]->name , 'localizacion' => $paseos[$i]->localizacion, 'costo' => $paseos[$i]->costo];
        
        return ['paseos' => $response];
    }

    /**
     * Display all data of Paseo to except the image, for a list of paseos into the Mobile App
     *
     * @param   int $id 
     * @return \Illuminate\Http\Response
     */
    public function exceptImage($id) {
        $paseo = Paseo::find($id);
        
        if ($paseo == null)
            return ['state' => 'error', 'description' => 'The id doesnt exist'];

        $response = [];

        $response = [
            'id' => $paseo->id, 
            'name' => $paseo->name , 
            'fecha' => $paseo->fecha, 
            'localizacion' => $paseo->localizacion, 
            'latitud' => $paseo->latitud, 
            'longitud' => $paseo->longitud, 
            'telefono' => $paseo->telefono, 
            'website' => $paseo->website, 
            'descripcion' => $paseo->descripcion, 
            'costo' => $paseo->costo,
            'categoria_id' => $paseo->categoria_id
        ];
    
        return ['paseo' => $response];
    }


    /**
     * Display a JSON of a specific Image
     *  
     * @param   int $id
     * @return JSON response
     */
    public function image($id) 
    {
        $paseo = Paseo::find($id);
        $paseo = json_decode($paseo, true);
        return ['imagen' => $paseo['imagen']];
    }

    /**
     * Display Paseos Blade
     */
    public function indexVista() {
        $paseos = Paseo::all();
        return view('paseo.index',['paseos'=>$paseos]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('paseo.create',['categorias'=>$categorias]);
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

        var_dump('maldita sea');
        
        return redirect()->route('paseos.indexVista')->with('message','data has been updated!');
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
    public function edit($id)
    {
        $paseo = Paseo::find($id);
        return view('paseo.edit',['paseo'=>$paseo]);
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

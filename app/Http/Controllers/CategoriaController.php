<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Resources\CategoriaResource;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return ['categorias' => $categorias];
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
        $this->validate($request, [
            'name'  => 'required',
        ]);

        $categoria = new Categoria($request->all());
        $categoria->save();

        return $categoria;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //CategoriaResource::withoutWrapping();
        
        //return new CategoriaResource($categoria);
        $categoria = Categoria::find($id);

        if (!$categoria)
            return ['state' => false, 'error' => 'No se encontro la categoria especificada.'];
        return ['categorias' => $categoria];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria)
            return ['state' => false, 'error' => 'No se encontro la categoria especificada.'];
        else {
            $categoria = Categoria::find($id);
            $categoria->id = $request->id;
            $categoria->name = $request->name;
            $categoria->save();
            return ['state' => true, 'error' => ''];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return ['state' => true];
    }
}

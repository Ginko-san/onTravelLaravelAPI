@extends('layouts.app')

@section('title')
    Paseos
@endsection

@section('content')
<div class="container">
        <div class="row">
            <form class="form-horizontal" role="form" action="{{route('paseos.indexVista')}}/{{ $paseo->id }}" method="POST">
                <div class="form-group">
                    <label for="id">Id Paseo</label>
                    <input type="number" class="form-control" id="id" name="id" value="{{ $paseo->id}}"></input>
                </div>

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $paseo->name}}">
                </div>

                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="text" class="form-control" id="fecha" name="fecha" value="{{ $paseo->fecha}}">
                </div>

                <div class="form-group">
                    <label for="localizacion">Localizacion</label>
                    <input type="text" class="form-control" id="localizacion" name="localizacion" value="{{ $paseo->localizacion}}">
                </div>

                <div class="form-group">
                    <label for="latitud">Latitud</label>
                    <input type="number" class="form-control" id="latitud" name="latitud" value="{{ $paseo->latitud}}">
                </div>

                <div class="form-group">
                    <label for="longitud">Longitud</label>
                    <input type="number" class="form-control" id="longitud" name="longitud" value="{{ $paseo->longitud}}">
                </div>

                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $paseo->telefono}}">
                </div>

                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" name="website" value="{{ $paseo->website}}">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $paseo->descripcion}}">
                </div>


                <!--  IMG Conversion-->
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $paseo->imagen}}">
                </div>

                <div class="form-group">
                    <label for="costo">Costo</label>
                    <input type="number" class="form-control" id="costo" name="costo" value="{{ $paseo->costo}}">
                </div>

                <div class="form-group">
                    <label for="categoria_id">Id Categoria</label>
                    <input type="text" class="form-control" id="categoria_id" name="categoria_id" value="{{ $paseo->categoria_id}}">
                </div>
                <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                            <input class="btn btn-primary btn-block" type="submit" valuew="Editar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">
                        </div>
                </div>
            </form>
        </div>
    </div>
@stop
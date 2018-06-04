@extends('layouts.app')

@section('title')
    Paseos
@endsection

@section('content')
<form class="form-horizontal col-xs-12 col-sm-offset-4 col-sm-8 col-md-offset-3 col-md-9 col-lg-offset-2 col-lg-10" role="form" action={{ route('paseos.store') }} method="post">
    
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Paseo a Fortuna">
    </div>

    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="text" class="form-control" id="fecha" name="fecha" placeholder="2018-12-05">
    </div>

    <div class="form-group">
        <label for="localizacion">Localizacion</label>
        <input type="text" class="form-control" id="localizacion" name="localizacion" placeholder="La Fortuna">
    </div>

    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="8877-6655">
    </div>

    <div class="form-group">
        <label for="website">Web Site</label>
        <input type="text" class="form-control" id="website" name="website" placeholder="www.4LaFortuna.com">
    </div>
    
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="8877-6655">
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del paseo">
    </div>

    <div class="form-group">
        <label for="imagen">Carga de imagen</label>
        <input type="file" class="form-control" id="imagen" name="imagen">
    </div>
    
    <div class="form-group">
        <label for="descripcion">Costo</label>
        <input type="number" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del paseo">
    </div>

    <div class="form-group">
        <label for="categoria_id">Categorias: </label>
        <select class="form-control" id="categoria_id" name="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id  }}">{{ $categoria->name }}</option> 
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="btn btn-primary btn-block" type="submit"  value="Guardar">
        </div>
    </div>
</form>
@stop
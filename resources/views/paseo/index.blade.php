@extends('layouts.app')

@section('title')
    Paseos
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="panel-body">
            <a href="{{ route('paseos.create') }}" class="btn btn-primary col-xs-offset-9 col-xs-3 col-sm-offset-10 col-sm-2 col-md-offset-11 col-md-1 col-lg-offset-11 col-lg-1" role="button">Nuevo</a>
            <table class="table table-hover margin-top">
                <thead>
                    <tr>
                        <th class="info">Id</th>
                        <th class="info">Nombre</th>
                        <th class="info">Fecha</th>
                        <th class="info">Localizacion</th>
                        <th class="info">Telefono</th>
                        <th class="info">Web Site</th>
                        <th class="info">Descripcion</th>
                        <th class="info">Imagen</th>
                        <th class="info">Costo</th>
                        <th class="info">Categoria Id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paseos as $paseo)
                        <tr>
                            <th class="">{{ $paseo->id }}</th>
                            <th class="">{{ $paseo->name }}</th>
                            <th class="">{{ $paseo->fecha }}</th>
                            <th class="">{{ $paseo->localizacion }}</th>
                            <th class="">{{ $paseo->telefono }}</th>
                            <th class="">{{ $paseo->website }}</th>
                            <th class="">{{ $paseo->descripcion }}</th>
                            <th class="">{{ $paseo->imagen }}</th>
                            <th class="">{{ $paseo->costo }}</th>
                            <th class="">{{ $paseo->categoria_id }}</th>
                            <th class="">
                                <p>
                                    <a href="{{route('paseos.indexVista')}}/{{ $paseo->id }}/edit" class="btn btn-primary" role="button">Editar</a>
                                    
                                    <form action="{{route('paseos.indexVista')}}/{{ $paseo->id }}" method="POST">
                                    <input class="btn btn-danger" type="submit" value="Eliminar">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </p>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
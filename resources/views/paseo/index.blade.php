@extends('layouts.app')

@section('title')
    Paseos
@endsection

@section('content')
<div class="panel-body col-xs-12 col-sm-offset-4 col-sm-8 col-md-offset-3 col-md-9 col-lg-offset-2 col-lg-10">
    <a href="{{ route('paseos.createVista') }}" class="btn btn-primary col-xs-2 col-sm-2 col-md-2 col-lg-2" role="button">Nuevo Viaje</a>
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
                <th class="info">Opciones</th>
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
                    <th class=""><img class="resizeTable" 
                                    @if ($paseo->imagen != '')
                                        src="{{ $paseo->imagen }}"
                                    @else
                                        src="images/no-image.jpg"
                                    @endif
                                >
                    </th>
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
@stop
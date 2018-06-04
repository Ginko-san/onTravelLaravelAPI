@extends('layouts.app')

@section('title')
    Categorias
@endsection

@section('content')
<div class="panel-body col-xs-12 col-sm-offset-4 col-sm-8 col-md-offset-3 col-md-9 col-lg-offset-2 col-lg-10">
    @if ($message !== '')
        <div class="row center alert alert-info col-md-4" role="alert">
            {{ $message }}
        </div>
    @endif
    <a href="{{ route('categorias.createVista') }}" class="btn btn-primary col-xs-4 col-sm-4 col-md-4 col-lg-3" role="button">Nueva Categoria</a>
    <table class="table table-hover margin-top">
        <thead>
            <tr>
                <th class="info">Id</th>
                <th class="info">Nombre</th>
                <th class="info">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <th class="">{{ $categoria->id }}</th>
                    <th class="">{{ $categoria->name }}</th>
                    <th class="">
                        <p>
                            <a href="{{route('categorias.indexVista')}}/{{ $categoria->id }}/edit" class="btn btn-primary" role="button">Editar</a>
                            
                            <form action="{{route('categorias.index')}}/{{ $categoria->id }}" method="POST">
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
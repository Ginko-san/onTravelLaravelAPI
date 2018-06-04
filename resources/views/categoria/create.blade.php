@extends('layouts.app')

@section('title')
    Paseos
@endsection

@section('content')
<form class="form-horizontal col-xs-12 col-sm-offset-4 col-sm-8 col-md-offset-3 col-md-9 col-lg-offset-2 col-lg-10" role="form" action={{ route('categorias.store') }} method="post">
    
    <div class="form-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Giras">
    </div>
    
    <div class="form-group">
        <div class="col-md-2 col-md-offset-3 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-2 ">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="btn btn-primary btn-block" type="submit"  value="Guardar">
        </div>
    </div>
</form>
@stop
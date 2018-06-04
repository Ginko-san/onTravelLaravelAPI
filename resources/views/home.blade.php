@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')   
<div class="col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-2 col-md-10 col-lg-offset-2 col-lg-10">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
    </div>
</div>
@endsection

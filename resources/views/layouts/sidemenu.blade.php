<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sidebar">
    <ul class="nav nav-sidebar">
        @if (Auth::check())
            <li><a href="{{ url(route('paseos.indexVista')) }}">Mis Viajes</a></li>
            @if (Auth::user()->is_admin == 1)
                <li><a href="{{ url(route('categorias.indexVista')) }}">Categorias</a></li>
            @endif
            <li><a href="{{ url('/contact') }}">Contactenos</a></li>    
        @endif
    </ul>
</div>
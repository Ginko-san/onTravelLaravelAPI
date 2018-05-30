<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>On Travel Web Admin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('menu')

        <main class="py-4">
            <div class="container">
                <div class="row">
                    @guest
                        @yield('content')
                    @else
                        @include('layouts.sidemenu')
                        @yield('content')
                    @endguest
                </div>
            </div>
        </main>
    </div>
</body>
</html>



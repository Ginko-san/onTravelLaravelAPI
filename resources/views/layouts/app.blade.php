<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>On Travel Web Admin</title>

    
    

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">

    <!-- Datepicker -->
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel='stylesheet' type='text/css'>

</head>
<body>
    <div id="app">
        @include('menu')

        <main class="py-4">
            <div class="container">
                <div class="row" id="parent-row">
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

    <!-- Scripts -->
        <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>


    
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('js/general.js') }}"></script>

</body>
</html>



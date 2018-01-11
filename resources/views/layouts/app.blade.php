<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" sizes="16x16" type="image/png" href="{{ asset('images/logo.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ADMS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notifbutton.css') }}" rel="stylesheet">
    <link href="{{ asset('css/panels.css') }}" rel="stylesheet">
    <link href="js/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    
</head>
<body>

 @include('inc.nav') 
    <div id="app">
        <div class="page-content">
            <div class="container">
                @include('inc.sidebar')
                @include('inc.messages')
                @yield('content')

            </div>
        </div>
    </div>

@include('inc.footer')




    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/notif.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery-autocomplete.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
</body>
</html>

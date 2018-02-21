<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Filcastpro') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filcastpro.css') }}" rel="stylesheet">
    
    @yield('css')

</head>
<body>

    @yield('content')
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('js')
</body>
</html>

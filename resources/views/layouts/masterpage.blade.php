<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        
        @yield('content')

    </body>
</html>

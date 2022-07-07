<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">

        
    </head>
   
   <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

            @include('layouts.shared.navbar')
            @include('layouts.shared.sidebar')
            
            <div class="content-wrapper">
                <main>
                    {{$slot}}
                </main>
            </div>

            @include('layouts.shared.footer')
                
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/main.js') }}" defer></script>
    <script src="{{ asset('js/main.min.js') }}" defer></script>



   </body>

</html>

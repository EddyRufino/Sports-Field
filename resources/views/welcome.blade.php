<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <h1>Welcome</h1>
            <a href="{{ route('cancha-uno') }}">Cancha uno</a>
            {{-- <v-app>
                <example-component></example-component>
            </v-app> --}}
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
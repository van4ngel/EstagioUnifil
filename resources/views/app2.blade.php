<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ًAdicionar Aluno</title>
        @vite(['resources/css/app.css', 'resources/js/app2.js'])

    </head>
    <body>
        <div id="app2">
            <app-example></app-example>
        </div>
    </body>
</html>

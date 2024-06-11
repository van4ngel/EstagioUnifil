<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ًLogin TCControle</title>
        @vite(['resources/css/app.css', 'resources/js/login.js'])

    </head>
    <body>
        <div id="login">
            <app-example3> </app-example3>
        </div>
    </body>
</html>
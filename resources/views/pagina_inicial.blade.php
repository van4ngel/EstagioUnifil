@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Inicial</title>
    @vite(['resources/css/app.css', 'resources/js/pagina_inicial.js'])
</head>
<body>
    <div id="pagina_inicial">
        <app-example2>
           
            @if (Route::has('register'))
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            @endif
        </app-example2>
    </div>
</body>
</html>
@endsection

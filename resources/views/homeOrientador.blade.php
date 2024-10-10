@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Inicial</title>
    @vite(['resources/css/app.css', 'resources/js/pagina_inicial_orientador.js'])
</head>
<body>
    <div id="pagina_inicial_orientador">
        <app-example3></app-example3> <!-- Corrigido para app-example3 -->
        @if (Route::has('lagout'))
            <div class="nav-item">
                <a class="nav-link" href="{{ route('loginOrientador') }}">{{ __('lagout') }}</a>
            </div>
        @endif
    </div>
</body>
</html>
@endsection

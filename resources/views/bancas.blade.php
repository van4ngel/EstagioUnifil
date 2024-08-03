@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('registerOrientador') }}">
                @csrf

                <div class="p-field">
                    <h2 style="text-align: center;">BANCAS</h2>
                    <label for="nome">Nome completo do Orientador</label>
                    <br>
                    <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autofocus>
                    @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <label for="matricula">Matrícula:</label>
                    <br>
                    <input id="matricula" type="text" class="form-control @error('matricula') is-invalid @enderror" name="matricula" value="{{ old('matricula') }}" required autocomplete="matricula">
                    @error('matricula')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

              
                

                <div class="p-field">
                    <button type="submit" class="p-button p-button-success custom-btn">
                        Registrar
                    </button>
                    <a href="{{ route('pagina_inicial') }}" class="p-button p-button-success custom-btn">
                        Voltar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

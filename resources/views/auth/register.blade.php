@extends('layouts.app')

@section('content')
<div id="register">
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="p-field">
                    <h2 style="text-align: center;">Preencha as informações abaixo para registrar um novo aluno:</h2>
                    <label for="nome">Nome completo do aluno:</label>
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
                    <label for="orientador">Orientador responsável:</label>
                    <br>
                    <input id="orientador" type="text" class="form-control @error('orientador') is-invalid @enderror" name="orientador" value="{{ old('orientador') }}" required autocomplete="orientador">
                    @error('orientador')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <label for="estagio_do_tcc">Estágio do TCC que o aluno se encontra:</label>
                    <br>
                    <input id="estagio_do_tcc" type="text" class="form-control @error('estagio_do_tcc') is-invalid @enderror" name="estagio_do_tcc" value="{{ old('estagio_do_tcc') }}" required autocomplete="estagio_do_tcc">
                    @error('estagio_do_tcc')
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

<style scoped>
    #register {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
    }

    .header {
        text-align: center;
        margin-bottom: 70px;
    }

    .header img {
        width: 100%;
        max-width: 400px;
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .p-field {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
    }

    @media (max-width: 768px) {
        .box {
            width: 90%;
        }
    }


    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    .p-button,
    .custom-btn {
        padding: 8px;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 30px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(255, 146, 72, 255);
        color: black;
        text-decoration: none;
    }

    .p-button:hover,
    .custom-btn:hover {
        background-color: rgba(255, 146, 72, 255);
        color: white;
    }
</style>

@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Tarefa</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('tarefas') }}">
                @csrf

                <div class="p-field">
                    <label for="tema">Tema da Tarefa:</label>
                    <input 
                        type="text" 
                        id="tema" 
                        class="form-control @error('tema') is-invalid @enderror" 
                        name="tema" 
                        value="{{ old('tema') }}" 
                        required
                    >
                    @error('tema')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <label for="estagio">Estágio do TCC:</label>
                    <input 
                        type="text" 
                        id="estagio" 
                        class="form-control @error('estagio') is-invalid @enderror" 
                        name="estagio" 
                        value="{{ old('estagio') }}" 
                        required
                    >
                    @error('estagio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <label for="data_entrega">Data de Entrega:</label>
                    <input 
                        type="date" 
                        id="data_entrega" 
                        class="form-control @error('data_entrega') is-invalid @enderror" 
                        name="data_entrega" 
                        value="{{ old('data_entrega') }}" 
                        required
                    >
                    @error('data_entrega')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <label for="link">Link Opcional:</label>
                    <input 
                        type="url" 
                        id="link" 
                        class="form-control @error('link') is-invalid @enderror" 
                        name="link" 
                        value="{{ old('link') }}"
                    >
                    @error('link')
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
    margin-bottom: 15px;
    font-size: 18px; /* Aumenta o tamanho da fonte dos labels */
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
        padding: 7px;
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
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .p-button:hover,
    .custom-btn:hover {
        transform: translateY(-2px);
        background-color: rgba(255, 146, 72, 255);
        color: white;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }
</style>

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
            <form method="POST" action="{{ route('AdicionarTarefas') }}">
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
                    <select 
                        id="estagio" 
                        class="form-control @error('estagio') is-invalid @enderror" 
                        name="estagio" 
                        required
                    >
                        <option value="" disabled selected>Selecione o estágio</option>
                        <option value="1" {{ old('estagio') == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('estagio') == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('estagio') == '3' ? 'selected' : '' }}>3</option>
                        <option value="4" {{ old('estagio') == '4' ? 'selected' : '' }}>4</option>
                    </select>
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
                    <label for="link">Link do classroom:</label>
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
                    <a href="{{ route('tarefas') }}" class="p-button p-button-success custom-btn">
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
        padding: 20px;
        box-sizing: border-box;
    }

    .box {
        width: 100%;
        max-width: 600px;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .header {
        text-align: center;
        margin-bottom: 30px;
    }

    .header img {
        width: 100%;
        max-width: 300px;
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .p-field {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    label {
        margin-bottom: 5px;
        font-size: 18px;
    }

    input[type="text"],
    input[type="date"],
    input[type="url"] {
        width: 100%;
        padding: 12px;
        font-size: 18px;
        margin-bottom: 10px;
        border-radius: 10px;
        border: 1px solid #ddd;
        box-sizing: border-box;
    }

    .p-button,
    .custom-btn {
        padding: 10px;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 20px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(255, 146, 72, 1);
        color: #fff;
        text-decoration: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .p-button:hover,
    .custom-btn:hover {
        transform: translateY(-2px);
        background-color: rgba(255, 146, 72, 0.8);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .invalid-feedback {
        color: #e74c3c;
        font-size: 14px;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .box {
            width: 90%;
            padding: 15px;
        }

        .header img {
            max-width: 250px;
        }
    }
</style>

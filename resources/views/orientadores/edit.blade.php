@extends('layouts.app')

@section('content')
<div id="edit">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Orientador</title>
    <div class="box">
    <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="header">
            <h2>Editar Orientador</h2>
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('orientadores.update', $orientador->id) }}">
                @csrf
                @method('PUT')

                <div class="p-field">
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" name="nome" value="{{ $orientador->nome }}" required>
                </div>

                <div class="p-field">
                    <label for="matricula">Matrícula:</label>
                    <input id="matricula" type="text" name="matricula" value="{{ $orientador->matricula }}" required>
                </div>

                <div class="p-field">
                    <button type="submit" class="btn btn-success">Salvar Alterações</button>
                </div>
                <a href="{{ route('orientador') }}" class="p-button p-button-success custom-btn">
                    Voltar
                </a>
            </form>
        </div>
    </div>
</div>
@endsection

<style scoped>
    #edit {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
        background-color: #f8f9fa; 
    }

    .box {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        padding: 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h2 {
        font-size: 24px;
        color: #333;
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .p-field {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }

    label {
        margin-bottom: 8px;
        font-size: 16px;
        color: #333;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ddd;
        background-color: #fafafa;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus {
        border-color: #ff924c;
        box-shadow: 0 0 8px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    .btn-success {
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        background-color: #28a745;
        color: white;
        text-align: center;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    .custom-btn {
        display: block;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s, transform 0.3s;
    }

    .custom-btn:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }
</style>

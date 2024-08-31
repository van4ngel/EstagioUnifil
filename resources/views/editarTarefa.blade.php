@extends('layouts.app')

@section('content')
<div id="edit">
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <title>Modificar tarefas</title>
        <div class="toldo">
            <h2 class="title">Editar Tarefa</h2>
            <form method="POST" action="{{ route('tarefas.update', $tarefa->id) }}">
                @csrf
                @method('PUT')

                <div class="p-field">
                    <label for="tema">Tema:</label>
                    <input 
                        type="text" 
                        id="tema" 
                        class="form-control @error('tema') is-invalid @enderror" 
                        name="tema" 
                        value="{{ old('tema', $tarefa->tema) }}" 
                        required
                    >
                    @error('tema')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <label for="estagio">Estágio:</label>
                    <input 
                        type="text" 
                        id="estagio" 
                        class="form-control @error('estagio') is-invalid @enderror" 
                        name="estagio" 
                        value="{{ old('estagio', $tarefa->estagio) }}" 
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
                        value="{{ old('data_entrega', $tarefa->data_entrega) }}" 
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
                        value="{{ old('link', $tarefa->link) }}"
                    >
                    @error('link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <button type="submit" class="btn btn-success">
                        Atualizar Tarefa
                    </button>
                    <a href="{{ route('tarefas') }}" class="btn btn-secondary">
                        Voltar
                    </a>
                </div>
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
        background-color: #f8f9fa; /* Cor de fundo */
    }

    .box {
        background: #ffffff;
        border-radius: 12px; /* Aumentado para maior suavidade */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 700px; /* Aumentado para mais espaço */
        padding: 30px; /* Aumentado para mais conforto */
    }

    .header {
        text-align: center;
        margin-bottom: 30px; /* Aumentado para mais espaço */
    }

    .header img {
        max-width: 100%; /* Garantir que a imagem não ultrapasse os limites do contêiner */
        height: auto;
    }

    .title {
        font-size: 28px; /* Aumentado para maior destaque */
        color: #333;
        text-align: center;
        margin-bottom: 20px; /* Espaço abaixo do título */
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 20px; /* Aumentado para mais espaço entre os campos */
    }

    .p-field {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px; /* Aumentado para mais espaço entre os campos */
    }

    label {
        margin-bottom: 10px; /* Aumentado para mais espaço */
        font-size: 18px; /* Aumentado para melhor legibilidade */
        color: #333;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    input[type="url"],
    select {
        width: 100%;
        padding: 14px; /* Aumentado para mais conforto */
        font-size: 18px; /* Aumentado para melhor legibilidade */
        margin-bottom: 10px; /* Aumentado para mais espaço */
        border-radius: 8px;
        border: 1px solid #ddd;
        background-color: #f9f9f9; /* Cor de fundo mais clara */
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="url"]:focus,
    select:focus {
        border-color: #ff924c;
        box-shadow: 0 0 10px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    .btn-success,
    .btn-secondary {
        display: block;
        width: 100%;
        padding: 14px; /* Aumentado para maior conforto */
        border: none;
        border-radius: 8px;
        font-size: 22px; /* Aumentado para maior destaque */
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s, transform 0.3s;
        margin-top: 10px; /* Espaço entre os botões */
    }

    .btn-success {
        background-color: #f09b39; /* Cor do botão */
        color: white;
    }

    .btn-success:hover {
        background-color: #d88b29; /* Cor mais escura para hover */
        transform: translateY(-2px);
    }

    .btn-secondary {
        background-color: #007bff;
        color: white;
        margin-top: 20px; /* Mais espaço antes do botão secundário */
    }

    .btn-secondary:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    .invalid-feedback {
        color: #e3342f;
        font-size: 16px;
        margin-top: 5px;
    }
</style>

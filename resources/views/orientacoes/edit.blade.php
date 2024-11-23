@extends('layouts.app')

@section('content')
<div class="container">
<title>Editar Orientação</title>

    <h1 class="my-4 text-center">Editar Orientação</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulário para editar a orientação -->
    <form action="{{ route('orientacoes.update', $orientacao->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="houve_orientacao" class="form-label">Houve Orientação?*</label>
            <select id="houve_orientacao" name="houve_orientacao" class="form-control" required>
                <option value="sim" {{ $orientacao->houve_orientacao ? 'selected' : '' }}>Sim</option>
                <option value="nao" {{ !$orientacao->houve_orientacao ? 'selected' : '' }}>Não</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="motivo_nao_orientacao" class="form-label">Motivo (se não houve orientação)</label>
            <input type="text" id="motivo_nao_orientacao" name="motivo_nao_orientacao" class="form-control" value="{{ $orientacao->motivo_nao_orientacao }}">
        </div>

        <div class="mb-3">
            <label for="descricao_orientacao" class="form-label">Descrição da Orientação*</label>
            <textarea id="descricao_orientacao" name="descricao_orientacao" class="form-control" rows="4" required>{{ $orientacao->descricao_orientacao }}</textarea>
        </div>

        <div class="mb-3">
            <label for="data_orientacao" class="form-label">Data da Orientação*</label>
            <input type="date" id="data_orientacao" name="data_orientacao" class="form-control" value="{{ \Carbon\Carbon::parse($orientacao->data_orientacao)->format('Y-m-d') }}" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Atualizar Orientação</button>
        </div>
    </form>

    <div class="text-center my-4">
        <a href="{{ route('orientacoes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection


<style scoped>
    #register {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; /* Ocupa toda a altura da tela */
        background-color: #f8f9fa; 
    }

    .box {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        padding: 30px; /* Aumentando o padding para mais espaço */
        margin: 20px; /* Adicionando margens laterais para responsividade */
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header img {
        max-width: 100%; /* Responsividade da imagem */
        height: auto;
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px; /* Aumentando a margem inferior entre os campos */
    }

    label {
        margin-bottom: 8px;
        font-size: 16px;
        color: #333;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ddd;
        background-color: #fafafa;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    select:focus,
    textarea:focus {
        border-color: #ff924c;
        box-shadow: 0 0 8px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    .btn-primary,
    .btn-secondary {
        display: block; /* Faz os botões ocuparem toda a largura */
        width: 100%; /* Para ocupar toda a largura */
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        margin-top: 10px; /* Espaço entre os botões */
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-primary {
        background-color: #007bff; /* Cor do botão de registrar */
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d; /* Cor do botão de voltar */
        color: white;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }
</style>
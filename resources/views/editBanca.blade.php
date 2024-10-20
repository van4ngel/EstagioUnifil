@extends('layouts.app')

@section('content')
<div id="edit">
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
        <title>Editar Banca</title>
            <h2 class="title">Editar Banca</h2>
            <form method="POST" action="{{ route('bancas.update', $banca->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="aluno_id">Aluno</label>
                    <select name="aluno_id" id="aluno_id" class="form-control">
                        @foreach($alunos as $aluno)
                            <option value="{{ $aluno->id }}" {{ $banca->aluno_id == $aluno->id ? 'selected' : '' }}>
                                {{ $aluno->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="orientador_id">Orientador</label>
                    <select name="orientador_id" id="orientador_id" class="form-control">
                        @foreach($orientadores as $orientador)
                            <option value="{{ $orientador->id }}" {{ $banca->orientador_id == $orientador->id ? 'selected' : '' }}>
                                {{ $orientador->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="data_banca">Data da Banca</label>
                    <input type="date" name="data_banca" id="data_banca" class="form-control" value="{{ $banca->data_banca }}">
                </div>

                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('bancas') }}" class="btn btn-secondary">Voltar</a>
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

    .form-group {
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

    input[type="date"],
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

    input[type="date"]:focus,
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

    .select-container {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .select-container select.form-control {
        width: 100%;
        padding: 14px 40px 14px 14px; /* Aumentado para maior conforto */
        font-size: 18px; /* Aumentado para melhor legibilidade */
        border-radius: 8px;
        border: 1px solid #ddd;
        background-color: #f9f9f9; /* Cor de fundo mais clara */
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        appearance: none;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .select-container select.form-control:focus {
        border-color: #ff924c;
        box-shadow: 0 0 10px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    .select-icon {
        position: absolute;
        top: 50%;
        right: 12px; /* Ajustado para alinhamento */
        transform: translateY(-50%);
        font-size: 20px; /* Aumentado para maior visibilidade */
        color: #333;
        pointer-events: none;
    }

    .invalid-feedback {
        color: #e3342f;
        font-size: 16px;
        margin-top: 5px;
    }
</style>

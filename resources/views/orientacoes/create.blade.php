@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Orientação</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <h2 class="title">Registrar nova Orientação</h2>

            <form method="POST" action="{{ route('orientacoes.store') }}">
                @csrf
                <input type="hidden" name="aluno_id" value="{{ $aluno->id }}">
                
                <!-- Campo se houve orientação -->
                <div class="form-group">
                    <label for="houve_orientacao">Houve orientação?</label>
                    <select id="houve_orientacao" name="houve_orientacao" class="form-control" required>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>

                <!-- Campo para motivo (se não houve) -->
                <div class="form-group">
                    <label for="motivo_nao_orientacao">Motivo (caso não tenha ocorrido)</label>
                    <input type="text" id="motivo_nao_orientacao" name="motivo_nao_orientacao" class="form-control">
                </div>

                <!-- Campo para descrição do que foi feito -->
                <div class="form-group">
                    <label for="descricao_orientacao">Descrição do que foi feito</label>
                    <textarea id="descricao_orientacao" name="descricao_orientacao" class="form-control" rows="4" required></textarea>
                </div>

                <!-- Campo para data da orientação -->
                <div class="form-group">
                    <label for="data_orientacao">Data da orientação</label>
                    <input type="date" id="data_orientacao" name="data_orientacao" class="form-control" required>
                </div>

                <!-- Botão para submeter -->
                <button type="submit" class="btn btn-primary">Registrar Orientação</button>
            </form>

            <a href="{{ route('homeorientador') }}" class="btn btn-secondary">
                Voltar
            </a>
        </div>
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

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
        margin: 0 15px; /* Adicionando margens laterais para responsividade */
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h2 {
        font-size: 24px;
        color: #333;
        margin: 0; /* Removendo margem padrão */
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 20px; /* Aumentando o espaço entre os campos */
    }

    .p-field {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px; /* Aumentando a margem inferior */
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

    .btn-success,
    .custom-btn {
        padding: 12px 20px; /* Ajustando o padding para botões */
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-success:hover,
    .custom-btn:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    .custom-btn {
        background-color: #007bff; /* Cor para o botão de voltar */
    }

    .custom-btn:hover {
        background-color: #0056b3; /* Cor para hover do botão de voltar */
    }
</style>

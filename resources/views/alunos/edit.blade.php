@extends('layouts.app')

@section('content')
<div id="edit">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Aluno</title>
    <div class="box">
        <div class="header">
            <h2>Editar Aluno</h2>
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('alunos.update', $aluno->id) }}">
                @csrf
                @method('PUT')

                <div class="p-field">
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" name="nome" value="{{ $aluno->nome }}" required>
                </div>

                <div class="p-field">
                    <label for="matricula">Matrícula:</label>
                    <input id="matricula" type="text" name="matricula" value="{{ $aluno->matricula }}" required>
                </div>

                <div class="p-field">
                    <label for="orientador">Orientador:</label>
                    <select id="orientador" name="orientador_id">
                        <option value="">Selecione um Orientador</option>
                        @foreach($orientadores as $orientador)
                            <option value="{{ $orientador->id }}" {{ $aluno->orientador_id == $orientador->id ? 'selected' : '' }}>
                                {{ $orientador->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="p-field">
                    <label for="estagio_do_tcc">Estágio do TCC que o aluno se encontra:</label>
                    <div class="select-container">
                        <select id="estagio_do_tcc" class="form-control @error('estagio_do_tcc') is-invalid @enderror" name="estagio_do_tcc" required autocomplete="estagio_do_tcc">
                            <option value="">Selecione uma opção</option>
                            <option value="1">Estágio 1</option>
                            <option value="2">Estágio 2</option>
                            <option value="3">Estágio 3</option>
                            <option value="4">Estágio 4</option>
                        </select>
                        <i class="fas fa-chevron-down select-icon"></i>
                    </div>
                    @error('estagio_do_tcc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <button type="submit" class="btn btn-success">Salvar Alterações</button>
                </div>
                <a href="{{ route('alunos') }}" class="p-button p-button-success custom-btn">
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
        background-color: #e9ecef; /* Cor de fundo mais suave */
    }

    .box {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 700px; /* Aumentado para mais espaço */
        padding: 30px;
    }

    .header {
        text-align: center;
        margin-bottom: 30px;
    }

    .header h2 {
        font-size: 28px; /* Aumentado para maior destaque */
        color: #333;
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 20px; /* Aumentado para mais espaço entre os campos */
    }

    .p-field {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px; 
    }

    label {
        margin-bottom: 10px; 
        font-size: 18px; 
        color: #333;
        font-weight: bold;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 14px; 
        font-size: 18px; /
        margin-bottom: 10px; 
        border-radius: 8px;
        border: 1px solid #ccc;  
        background-color: #f9f9f9;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    select:focus {
        border-color: #ff924c;
        box-shadow: 0 0 10px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    .btn-success {
        padding: 14px 20px; /* Aumentado para maior conforto */
        border: none;
        border-radius: 8px;
        font-size: 22px; /* Aumentado para maior destaque */
        cursor: pointer;
        background-color: #f09b39; /* Cor do botão */
        color: white;
        text-align: center;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-success:hover {
        background-color: #d88b29; /* Cor mais escura para hover */
        transform: translateY(-2px);
    }

    .custom-btn {
        display: block;
        padding: 12px 20px; 
        border: none;
        border-radius: 8px;
        font-size: 18px; 
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
        border: 1px solid #ccc; /* Cor de borda mais suave */
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

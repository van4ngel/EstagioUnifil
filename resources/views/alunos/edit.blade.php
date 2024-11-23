@extends('layouts.app')

@section('content')
<div id="edit">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Aluno</title>
    <div class="box">
    <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
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
    /* Container principal centralizado */
    #edit {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
        margin: 0;
        background: linear-gradient(135deg, #ffff, #f4f6f9);
        background-size: cover;
        background-attachment: fixed;
        font-family: 'Arial', sans-serif;
    }

    /* Caixa principal */
    .box {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 600px;
        padding: 30px;
        animation: fadeIn 1s ease-in-out;
    }

    /* Animação de entrada */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Estilo do cabeçalho */
    .header img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto 20px;
    }

    .header h2 {
        font-size: 24px;
        text-align: center;
        color: #333;
        margin: 0;
        font-weight: bold;
    }

    /* Formulário */
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
        font-size: 16px;
        font-weight: bold;
        color: #555;
        margin-bottom: 8px;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background: #f9f9f9;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    select:focus {
        border-color: #f09b39;
        box-shadow: 0 0 10px rgba(240, 155, 57, 0.5);
        outline: none;
    }

    .select-container {
        position: relative;
    }

    .select-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 16px;
        color: #aaa;
        pointer-events: none;
    }

    .invalid-feedback {
        color: #e3342f;
        font-size: 14px;
    }

    /* Botões */
    .btn-success {
        width: 100%;
        padding: 14px;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        color: #fff;
        background: linear-gradient(135deg, #f09b39, #d87a31);
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .custom-btn {
        display: block;
        padding: 12px;
        text-align: center;
        font-size: 16px;
        color: #fff;
        background: linear-gradient(135deg, #007bff, #0056b3);
        border-radius: 8px;
        text-decoration: none;
        margin-top: 10px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .custom-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .box {
            width: 95%;
            padding: 20px;
        }

        .header h2 {
            font-size: 20px;
        }

        input[type="text"],
        select {
            font-size: 14px;
        }

        .btn-success,
        .custom-btn {
            font-size: 14px;
        }
    }
</style>


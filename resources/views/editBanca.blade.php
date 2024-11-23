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
    .btn btn-secondary{
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


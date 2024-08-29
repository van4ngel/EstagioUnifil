@extends('layouts.app')

@section('content')
<div id="edit">
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
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

    input[type="text"],
    select {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        margin-bottom: 5px;
        border-radius: 8px;
        border: 1px solid #ddd;
        background-color: #fafafa;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    select:focus {
        border-color: #ff924c;
        box-shadow: 0 0 8px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    .btn-success {
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 20px;
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

    .select-container {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .select-container select.form-control {
        width: 100%;
        padding: 12px 40px 12px 12px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ddd;
        background-color: #fafafa;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        appearance: none;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .select-container select.form-control:focus {
        border-color: #ff924c;
        box-shadow: 0 0 8px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    .select-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 18px;
        color: #333;
        pointer-events: none;
    }

    .invalid-feedback {
        color: #e3342f;
        font-size: 16px;
        margin-top: 5px;
    }
</style>

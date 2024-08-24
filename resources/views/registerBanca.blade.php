@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Registrar Banca</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('registerBanca') }}">
                @csrf

           
                <div class="p-field">
                    <label for="aluno_id">Aluno:</label>
                    <select id="aluno_id" class="form-control @error('aluno_id') is-invalid @enderror" name="aluno_id" required>
                        <option value="">Selecione um Aluno</option>
                        @foreach($alunos as $aluno)
                            <option value="{{ $aluno->id }}" {{ old('aluno_id') == $aluno->id ? 'selected' : '' }}>
                                {{ $aluno->nome }} (Matrícula: {{ $aluno->matricula }})
                            </option>
                        @endforeach
                    </select>
                    @error('aluno_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <label for="orientador_id">Avaliadores da banca:</label>
                    <select id="orientador_id" class="form-control @error('orientador_id') is-invalid @enderror" name="orientador_id" required>
                        <option value="">Selecione um Avaliador</option>
                        @foreach($orientadores as $orientador)
                            <option value="{{ $orientador->id }}" {{ old('orientador_id') == $orientador->id ? 'selected' : '' }}>
                                {{ $orientador->nome }} (Matrícula: {{ $orientador->matricula }})
                            </option>
                        @endforeach
                    </select>
                    @error('orientador_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
             <div class="p-field">
    <label for="data_banca">Data da Banca:</label>
    <input 
        type="date" 
        id="data_banca" 
        class="form-control @error('data_banca') is-invalid @enderror" 
        name="data_banca" 
        value="{{ old('data_banca') }}" 
        required
    >
    @error('data_banca')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>




                <div class="p-field">
                    <button type="submit" class="p-button p-button-success custom-btn">
                        Registrar
                    </button>
                    <a href="{{ route('bancas') }}" class="p-button p-button-success custom-btn">
                        Voltar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<style scoped>
    #register {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
    }

    .header {
        text-align: center;
        margin-bottom: 70px;
    }

    .header img {
        width: 100%;
        max-width: 400px;
    }

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
        margin-bottom: 10px;
        font-size: 15px; /* Aumenta o tamanho da fonte dos labels */
    }

    @media (max-width: 768px) {
        .box {
            width: 90%;
        }
    }

    input[type="date"],
    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    .p-button,
    .custom-btn {
        padding: 7px;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 30px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(255, 146, 72, 255);
        color: black;
        text-decoration: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .p-button:hover,
    .custom-btn:hover {
        transform: translateY(-2px);
        background-color: rgba(255, 146, 72, 255);
        color: white;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .invalid-feedback {
        color: #e3342f; /* Cor do texto de erro */
        font-size: 16px; /* Aumenta o tamanho da fonte do texto de erro */
        margin-top: 5px;
    }

    .form-control {
        border: 2px solid #ddd;
        background-color: #fafafa;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: rgba(255, 146, 72, 255);
        box-shadow: 0 0 8px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    .select-container {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .select-container select.form-control {
        width: 100%;
        padding: 12px 40px 12px 12px; /* Adiciona espaço para a seta */
        font-size: 18px;
        border-radius: 8px;
        border: 2px solid #ddd;
        background-color: #fafafa;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        appearance: none; /* Remove a seta padrão do navegador */
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .select-container select.form-control:focus {
        border-color: rgba(255, 146, 72, 255);
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
        pointer-events: none; /* Faz com que a seta não interfira na seleção */
    }
</style>

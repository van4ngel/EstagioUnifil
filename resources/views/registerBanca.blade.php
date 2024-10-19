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
                    <button type="submit" class="custom-btn">
                        Registrar
                    </button>
                    <a href="{{ route('bancas') }}" class="custom-btn">
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
        padding: 20px;
        box-sizing: border-box;
    }

    .box {
        width: 90%; /* Aumenta a largura em dispositivos menores */
        max-width: 600px; /* Limita a largura máxima da caixa */
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header img {
        width: 100%;
        max-width: 250px; /* Ajusta o tamanho máximo da imagem */
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 15px; /* Espaçamento menor entre os campos */
    }

    .p-field {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px; /* Reduz a margem inferior dos rótulos */
        font-size: 14px; /* Tamanho da fonte dos labels */
    }

    input[type="date"],
    select {
        width: 100%;
        padding: 10px; /* Reduz o padding dos campos */
        font-size: 14px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        background-color: #fafafa;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .custom-btn {
        padding: 8px 12px; /* Reduz o padding dos botões */
        border: none;
        border-radius: 5px;
        font-size: 14px; /* Tamanho da fonte do botão */
        cursor: pointer;
        margin-top: 10px; /* Margem superior menor */
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(255, 146, 72, 1);
        color: white; /* Alterado para branco para melhor contraste */
        text-decoration: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .custom-btn:hover {
        transform: translateY(-1px);
        background-color: rgba(255, 146, 72, 0.9);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .invalid-feedback {
        color: #e3342f; /* Cor do texto de erro */
        font-size: 14px; /* Tamanho da fonte do texto de erro */
        margin-top: 5px;
    }

    .form-control:focus {
        border-color: rgba(255, 146, 72, 1);
        box-shadow: 0 0 5px rgba(255, 146, 72, 0.3);
        outline: none;
    }

    @media (max-width: 768px) {
        .box {
            width: 95%; /* Aumenta a largura em dispositivos menores */
            padding: 15px;
        }

        .header img {
            max-width: 200px; /* Ajusta o tamanho máximo da imagem */
        }
    }
</style>

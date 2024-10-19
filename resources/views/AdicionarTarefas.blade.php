@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Tarefa</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('AdicionarTarefas') }}">
                @csrf

                <div class="p-field">
                    <label for="tema">Tema da Tarefa:</label>
                    <input 
                        type="text" 
                        id="tema" 
                        class="form-control @error('tema') is-invalid @enderror" 
                        name="tema" 
                        value="{{ old('tema') }}" 
                        required
                    >
                    @error('tema')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <label for="estagio">Estágio do TCC:</label>
                    <select 
                        id="estagio" 
                        class="form-control @error('estagio') is-invalid @enderror" 
                        name="estagio" 
                        required
                    >
                        <option value="" disabled selected>Selecione o estágio</option>
                        <option value="1" {{ old('estagio') == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('estagio') == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('estagio') == '3' ? 'selected' : '' }}>3</option>
                        <option value="4" {{ old('estagio') == '4' ? 'selected' : '' }}>4</option>
                    </select>
                    @error('estagio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
    <label for="data_entrega">Data de Entrega:</label>
    <input 
        type="date" 
        id="data_entrega" 
        class="form-control @error('data_entrega') is-invalid @enderror" 
        name="data_entrega" 
        value="{{ old('data_entrega') }}" 
        required
    >
    @error('data_entrega')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

                <div class="p-field">
                    <label for="link">Link do classroom:</label>
                    <input 
                        type="url" 
                        id="link" 
                        class="form-control @error('link') is-invalid @enderror" 
                        name="link" 
                        value="{{ old('link') }}"
                    >
                    @error('link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="p-field">
                    <button type="submit" class="p-button p-button-success custom-btn">
                        Registrar
                    </button>
                    <a href="{{ route('tarefas') }}" class="p-button p-button-success custom-btn">
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

    .box {
        width: 90%; /* Aumenta a largura da caixa em dispositivos móveis */
        max-width: 600px; /* Define uma largura máxima */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .header {
        text-align: center;
        margin-bottom: 40px; /* Reduz o espaço inferior da imagem */
    }

    .header img {
        width: 100%;
        max-width: 300px; /* Ajusta o tamanho máximo da imagem */
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 15px; /* Reduz o espaço entre os campos */
    }

    .p-field {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px; /* Reduz a margem inferior dos labels */
        font-size: 16px; /* Mantém um tamanho de fonte razoável */
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 8px; /* Reduz o preenchimento interno do campo */
        font-size: 14px; /* Diminui o tamanho da fonte */
        margin-bottom: 5px;
        border-radius: 8px; /* Arredonda os cantos dos campos */
        border: 1px solid #ddd;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    select:focus {
        border-color: rgba(255, 146, 72, 255);
        box-shadow: 0 0 4px rgba(255, 146, 72, 0.3);
        outline: none; /* Remove a borda padrão ao focar */
    }

    .p-button,
    .custom-btn {
        padding: 8px; /* Reduz o preenchimento interno dos botões */
        border: none;
        border-radius: 8px; /* Arredonda os cantos dos botões */
        font-size: 16px; /* Diminui o tamanho da fonte dos botões */
        cursor: pointer;
        margin-top: 20px; /* Mantém um espaço acima dos botões */
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(255, 146, 72, 255);
        color: black;
        text-decoration: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .p-button:hover,
    .custom-btn:hover {
        transform: translateY(-1px); /* Diminui a elevação ao passar o mouse */
        background-color: rgba(255, 146, 72, 255);
        color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .invalid-feedback {
        color: #e3342f; /* Cor do texto de erro */
        font-size: 14px; /* Mantém um tamanho de fonte adequado para erros */
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .box {
            width: 95%; /* Ajusta a largura da caixa em telas menores */
            padding: 15px; /* Reduz o preenchimento interno */
        }

        .header img {
            max-width: 250px; /* Ajusta o tamanho máximo da imagem */
        }

        .p-button,
        .custom-btn {
            font-size: 14px; /* Diminui o tamanho da fonte dos botões em dispositivos móveis */
        }
    }
</style>
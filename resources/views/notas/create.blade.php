@extends('layouts.app')

@section('content')
<div class="form-container">
    <h1 class="form-heading">Adicionar Nota à Banca</h1>

    <form action="{{ route('notas.store') }}" method="POST" class="note-form">
        @csrf
        <input type="hidden" name="banca_id" value="{{ $banca->id }}">

        <div class="input-group">
            <label for="orientador_id">Selecione o Orientador</label>
            <select name="orientador_id" required class="input-select">
                <option value="">Escolha um orientador</option>
                @foreach($orientadores as $orientador)
                    <option value="{{ $orientador->id }}">{{ $orientador->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group">
            <label for="nota_orientacao">Nota de Orientação (Opcional)</label>
            <input type="number" name="nota_orientacao" class="input-field" min="0" max="10" placeholder="0 a 10">
        </div>

        <div class="input-group">
            <label for="nota_apresentacao">Nota de Apresentação</label>
            <input type="number" name="nota_apresentacao" class="input-field" required min="0" max="10" placeholder="0 a 10">
        </div>

        <div class="input-group">
            <label for="nota_relatorio">Nota de Relatório</label>
            <input type="number" name="nota_relatorio" class="input-field" required min="0" max="10" placeholder="0 a 10">
        </div>

        <button type="submit" class="btn-submit">Salvar Nota</button>
    </form>
</div>
@endsection

<style scoped>
    .form-container {
        max-width: 500px; /* Limita a largura da página */
        margin: 40px auto; /* Centraliza a container */
        padding: 20px; /* Adiciona padding interno */
        background-color: #ffffff; /* Cor de fundo branca */
        border-radius: 15px; /* Bordas arredondadas */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Sombra suave */
        transition: transform 0.3s; /* Transição suave para transformação */
    }

    .form-container:hover {
        transform: scale(1.02); /* Efeito de leve aumento ao passar o mouse */
    }

    .form-heading {
        text-align: center;
        margin-bottom: 25px;
        font-size: 28px; /* Tamanho do título */
        color: #333; /* Cor do texto */
        font-family: 'Helvetica', sans-serif; /* Tipo de fonte */
    }

    .note-form {
        display: flex;
        flex-direction: column; /* Alinha os campos em coluna */
        gap: 15px; /* Espaçamento entre os campos */
    }

    .input-group {
        display: flex;
        flex-direction: column; /* Alinha os rótulos e campos em coluna */
    }

    label {
        margin-bottom: 5px; /* Margem inferior ajustada */
        font-size: 16px; /* Tamanho da fonte dos rótulos */
        color: #555; /* Cor do texto dos rótulos */
        font-weight: bold;
    }

    .input-select, .input-field {
        width: 100%;
        padding: 12px; /* Padding adequado */
        border-radius: 8px; /* Bordas arredondadas */
        border: 1px solid #ccc; /* Borda leve */
        background-color: #f9f9f9; /* Cor de fundo leve */
        transition: border-color 0.3s, box-shadow 0.3s; /* Transições suaves */
        font-size: 16px; /* Tamanho da fonte */
    }

    .input-select:focus, .input-field:focus {
        border-color: #007bff; /* Cor da borda ao focar */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Sombra ao focar */
        outline: none; /* Remove contorno padrão */
    }

    .btn-submit {
        background-color: #28a745; /* Cor do botão de salvar */
        color: white; /* Cor do texto do botão */
        border: none;
        border-radius: 8px; /* Bordas arredondadas */
        padding: 12px; /* Padding confortável */
        font-size: 16px; /* Tamanho da fonte do botão */
        cursor: pointer; /* Cursor de ponteiro ao passar o mouse */
        transition: background-color 0.3s, transform 0.3s; /* Transições suaves */
        margin-top: 15px; /* Espaço acima do botão */
    }

    .btn-submit:hover {
        background-color: #218838; /* Cor ao passar o mouse */
        transform: translateY(-2px); /* Efeito de elevação suave */
    }

    @media (max-width: 500px) {
        .form-container {
            padding: 15px; /* Reduz padding em telas pequenas */
        }

        .form-heading {
            font-size: 24px; /* Ajusta tamanho do título em telas pequenas */
        }

        .btn-submit {
            width: 100%; /* Botão ocupa toda a largura em telas pequenas */
        }
    }
</style>

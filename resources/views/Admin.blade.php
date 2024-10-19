@extends('layouts.app')

@section('content')
<div class="container">
<title>Orientações Registradas</title>
    <h1 class="my-4 text-center">Orientações Registradas</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Matrícula do Aluno</th>
                <th>Orientador</th>
                <th>Matrícula do Orientador</th>
                <th>Houve Orientação</th>
                <th>Motivo (se não houve)</th>
                <th>Descrição</th>
                <th>Data da Orientação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orientacoes as $orientacao)
                <tr>
                    <td>{{ $orientacao->aluno->nome }}</td>
                    <td>{{ $orientacao->aluno->matricula }}</td>
                    <td>{{ $orientacao->orientador->nome }}</td>
                    <td>{{ $orientacao->orientador->email }}</td>
                    <td>{{ $orientacao->houve_orientacao ? 'Sim' : 'Não' }}</td>
                    <td>{{ $orientacao->motivo_nao_orientacao }}</td>
                    <td>{{ $orientacao->descricao_orientacao }}</td>
                    <td>{{ \Carbon\Carbon::parse($orientacao->data_orientacao)->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center my-4">
        <a href="{{ route('pagina_inicial') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>

<style>
    .container {
        background-color: #ffffff; /* Cor de fundo da container */
        border-radius: 12px; /* Bordas arredondadas */
        padding: 30px; /* Espaçamento interno */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra para dar profundidade */
        max-width: 900px; /* Largura máxima da container */
        margin: auto; /* Centraliza a container */
    }

    table {
        margin-top: 20px; /* Espaçamento acima da tabela */
        width: 100%; /* Tabela ocupando toda a largura */
        border-collapse: collapse; /* Remove espaçamento entre bordas */
    }

    th {
        background-color: #007bff; /* Cor de fundo do cabeçalho */
        color: white; /* Cor do texto do cabeçalho */
        padding: 12px; /* Espaçamento interno nas células do cabeçalho */
        text-align: left; /* Alinha o texto à esquerda */
    }

    td {
        padding: 10px; /* Espaçamento interno nas células */
        vertical-align: middle; /* Alinhamento vertical do texto nas células */
    }

    tr:nth-child(even) {
        background-color: #f2f2f2; /* Cor de fundo das linhas pares */
    }

    .btn-secondary {
        background-color: #6c757d; /* Cor do botão voltar */
        border-color: #6c757d; /* Borda do botão */
        padding: 10px 20px; /* Padding confortável */
        border-radius: 8px; /* Bordas arredondadas */
        transition: background-color 0.3s; /* Transição suave */
    }

    .btn-secondary:hover {
        background-color: #5a6268; /* Cor do botão ao passar o mouse */
        border-color: #545b62; /* Borda do botão ao passar o mouse */
    }

    .alert {
        border-radius: 8px; /* Bordas arredondadas para alertas */
        margin-bottom: 20px; /* Espaçamento inferior dos alertas */
    }
</style>
@endsection

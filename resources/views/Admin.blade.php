@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Orientações Registradas</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
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
                <td>{{ $orientacao->aluno->nome }}</td> <!-- Nome do aluno -->
                <td>{{ $orientacao->aluno->matricula }}</td> <!-- Matrícula do aluno -->
                <td>{{ $orientacao->orientador->nome }}</td> <!-- Nome do orientador -->
                <td>{{ $orientacao->orientador->email }}</td> <!-- Matrícula do orientador -->
                <td>{{ $orientacao->houve_orientacao ? 'Sim' : 'Não' }}</td> <!-- Correção aqui -->
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
        background-color: #f8f9fa; /* Cor de fundo da tabela */
        border-radius: 10px; /* Bordas arredondadas */
        padding: 20px; /* Espaçamento interno */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para dar profundidade */
    }

    table {
        margin-top: 20px; /* Espaçamento acima da tabela */
        width: 100%; /* Tabela ocupando toda a largura */
    }

    th {
        background-color: #343a40; /* Cor de fundo do cabeçalho */
        color: white; /* Cor do texto do cabeçalho */
    }

    td {
        vertical-align: middle; /* Alinhamento vertical do texto nas células */
    }

    .btn-secondary {
        background-color: #6c757d; /* Cor do botão voltar */
        border-color: #6c757d; /* Borda do botão */
    }

    .btn-secondary:hover {
        background-color: #5a6268; /* Cor do botão ao passar o mouse */
        border-color: #545b62; /* Borda do botão ao passar o mouse */
    }
</style>
@endsection

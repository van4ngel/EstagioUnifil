@extends('layouts.app')

@section('content')
<div class="container">
<title>Bancas</title>
    <h1>Notas da Banca</h1>


    <a href="{{ route('notas.create', $bancaId) }}" class="btn btn-primary mb-3">Adicionar Nota</a>

    @if($notas->isEmpty())
        <p>Não há notas cadastradas para esta banca.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Orientador</th>
                    <th>Nota de Orientação</th>
                    <th>Nota de Apresentação</th>
                    <th>Nota de Relatório</th>
                    <th>Média</th>
                </tr>
            </thead>
            <tbody>
    @foreach($notas as $nota)
        <tr>
            <td>{{ $nota->orientador->name }}</td> <!-- Correção aqui -->
            <td>{{ $nota->nota_orientacao }}</td>
            <td>{{ $nota->nota_apresentacao }}</td> <!-- Correção aqui -->
            <td>{{ $nota->nota_relatorio }}</td> <!-- Correção aqui -->
            <td>{{ $nota->media }}</td>
        </tr>
    @endforeach
</tbody>
        </table>
        @if($mediaGeralBanca !== null)
            <h4>Média Geral: {{ $mediaGeralBanca }}</h4>
        @endif
    @endif

    <a href="{{ route('homeorientador') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

<style scoped>
    .container {
        max-width: 800px; /* Limita a largura da página */
        margin: 0 auto; /* Centraliza a container */
    
        background-color: #f9f9f9; /* Cor de fundo leve */
        border-radius: 8px; /* Arredonda os cantos da container */
        
    }

    .page-title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 28px;
        color: #333;
    }

    .btn-primary {
        background-color: #007bff; /* Cor do botão de adicionar nota */
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Cor do botão ao passar o mouse */
        transform: translateY(-2px);
    }

    .alert {
        padding: 15px;
        margin: 15px 0;
        border-radius: 5px;
    }

    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse; /* Remove espaçamento entre as células */
    }

    .table th, .table td {
        padding: 12px;
        text-align: left;
    }

    .table th {
        background-color: #343a40; /* Cor de fundo escura para o cabeçalho */
        color: white; /* Texto branco */
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1; /* Cor de fundo ao passar o mouse */
    }

    .average {
        text-align: center;
        margin-top: 20px;
        font-size: 24px;
        color: #333;
    }

    @media (max-width: 600px) {
        .page-title {
            font-size: 24px; /* Ajusta o tamanho da fonte em telas pequenas */
        }

        .btn-primary {
            width: 100%; /* Botão ocupa toda a largura em telas pequenas */
        }

        .table th, .table td {
            padding: 8px; /* Reduz o padding para campos em telas pequenas */
        }
    }
</style>
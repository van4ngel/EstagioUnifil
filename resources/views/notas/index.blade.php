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
        <td>{{ $nota->orientador->nome }}</td>
        <td>{{ number_format($nota->nota_orientacao, 2) }}</td> <!-- Exibe a nota de orientação com 2 casas decimais -->
        <td>{{ number_format($nota->nota_apresentacao, 2) }}</td> <!-- Exibe a nota de apresentação com 2 casas decimais -->
        <td>{{ number_format($nota->nota_relatorio, 2) }}</td> <!-- Exibe a nota de relatório com 2 casas decimais -->
        <td>{{ number_format($nota->media, 2) }}</td> <!-- Exibe a média com 2 casas decimais -->
    </tr>
@endforeach

</tbody>
        </table>
        @if($mediaGeralBanca !== null)
            <h4>Média Geral: {{number_format($mediaGeralBanca, 2, '.', '' )}}</h4>
        @endif
    @endif

    <a href="{{ route('homeorientador') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection

<style scoped>
    /* Estilo geral */
   

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

    /* Títulos */
    h1 {
        font-size: 28px;
        text-align: center;
        color: #444;
        margin-bottom: 20px;
        font-weight: bold;
    }

    h4 {
        font-size: 20px;
        text-align: center;
        color: #555;
        margin-top: 20px;
        font-weight: bold;
    }

    /* Links e Botões */
    .btn {
        display: inline-block;
        padding: 12px 20px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .btn-primary {
        background: linear-gradient(135deg, #f09b39, #d87a31);
        color: #fff;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .btn-secondary {
        background: linear-gradient(135deg, #ddd, #bbb);
        color: #333;
        margin-top: 15px;
    }

    .btn-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    /* Tabela */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table thead {
        background-color: #f09b39;
        color: #fff;
    }

    .table thead th {
        padding: 12px;
        text-align: left;
        font-weight: bold;
    }

    .table tbody tr {
        border-bottom: 1px solid #ddd;
    }

    .table tbody tr:hover {
        background-color: rgba(240, 155, 57, 0.1);
    }

    .table tbody td {
        padding: 12px;
        color: #555;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .container {
            width: 95%;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        .btn {
            font-size: 14px;
            padding: 10px 15px;
        }

        .table thead th, .table tbody td {
            font-size: 14px;
        }
    }
</style>

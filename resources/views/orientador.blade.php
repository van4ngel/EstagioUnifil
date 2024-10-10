@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerenciar Orientador</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <h2 style="text-align: center;">Orientadores cadastrados:</h2>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome orientador:</th>
                        <th>Matrícula:</th>
                        <th>Alunos:</th>
                        <th>Data de Criação:</th>
                        <th>Ações:</th> <!-- Nova coluna para ações -->
                    </tr>
                </thead>
                <tbody>
    @foreach($orientadores as $orientador)
        <tr>
            <td>{{ $orientador->nome }}</td>
            <td>{{ $orientador->matricula }}</td>
            <td>
                <div class="aluno-lista">
                    @if($orientador->alunos->isEmpty())
                        <div class="aluno-item">Nenhum aluno atribuído</div>
                    @else
                        @foreach($orientador->alunos as $aluno)
                            <div class="aluno-item">{{ $aluno->nome }} (Matrícula: {{ $aluno->matricula }})</div>
                        @endforeach
                    @endif
                </div>
            </td>
            <td>{{ \Carbon\Carbon::parse($orientador->created_at)->format('d/m/Y') }}</td>
            <td>
                <!-- Botão para modificar o orientador -->
                <a href="{{ route('orientadores.edit', $orientador->id) }}" class="btn btn-warning">
                    Modificar
                </a>
            </td>
        </tr>
    @endforeach
</tbody>

            </table>

            <div class="actions">
                <a href="{{ route('registerOrientador') }}" class="btn btn-primary">
                    Adicionar Orientador
                </a>

                <a href="{{ route('pagina_inicial') }}" class="btn btn-secondary">
                    Voltar
                </a>
            </div>
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
        background-color: #f4f7f9;
        font-family: 'Roboto', sans-serif;
        padding: 10px; /* Padding reduzido para evitar que o conteúdo fique muito próximo das bordas */
    }

    .box {
        width: 95%;
        max-width: 1200px;
        padding: 20px;
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border: 1px solid #e0e0e0;
    }

    .header {
        text-align: center;
        margin-bottom: 50px; /* Espaço maior abaixo do header */
    }

    .header img {
        width: 100%;
        max-width: 300px; /* Ajuste para imagem em dispositivos móveis */
        border-radius: 8px;
        margin-bottom: 20px; /* Espaço abaixo da imagem */
    }

    .title {
        text-align: center;
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        table-layout: auto;
    }

    .table th, .table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #e0e0e0;
        font-size: 1.0rem;
        color: #333;
    }

    .table th {
        background-color: #007bff;
        color: #ffffff;
        font-weight: 600;
    }

    .table td {
        background-color: #ffffff;
    }

    .table tr:nth-child(even) td {
        background-color: #f9f9f9;
    }

    .table tr:hover td {
        background-color: #f1f1f1;
    }

    .actions {
        display: flex;
        justify-content: space-between;
        gap: 15px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-size: 1.0rem;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
    }

    .btn-primary {
        background-color: #ff924c;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #e77f39;
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-secondary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    /* Responsividade para telas menores */
    @media (max-width: 768px) {
        .box {
            width: 1000%;
            padding: 10px;
        }

        .header img {
            max-width: 450px;
            margin-bottom: 260px; /* Reduz o espaço abaixo da imagem */
        }

        .title {
            font-size: 1.2rem;
            ttext-align: center;
            margin-bottom: 10px; /* Reduz o espaço abaixo do título */
        }

        .table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        .table thead {
            display: none;
        }

        .table tbody tr {
            display: block;
            margin-bottom: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #ffffff;
            padding: 10px;
        }

        .table tbody td {
            display: block;
            text-align: center;
            font-size: 0.9rem;
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .table tbody td::before {
            content: attr(data-label);
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #007bff;
        }

        .btn {
            width: 100%;
            padding: 8px 15px;
        }

        .actions {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

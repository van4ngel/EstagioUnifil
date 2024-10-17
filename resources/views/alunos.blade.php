@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerenciar Alunos</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <h2 class="title">Alunos cadastrados no sistema:</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome Aluno:</th>
                            <th>Matrícula:</th>
                            <th>Orientador responsavel:</th>
                            <th>Estágio do TCC:</th>
                            <th>Data de Criação:</th>
                            <th>Ações:</th> <!-- Coluna para ações -->
                        </tr>
                    </thead>
                    <tbody>
    @foreach($alunos as $aluno)
        <tr>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->matricula }}</td>
            <td>{{ $aluno->orientador ? $aluno->orientador->nome : 'Não atribuído' }}</td>

            <td>{{ $aluno->estagio_do_tcc }}</td>
            <td>{{ \Carbon\Carbon::parse($aluno->created_at)->format('d/m/Y ') }}</td>
            <td>
                <!-- Botão para modificar o aluno -->
                <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning">
                    Modificar
                </a>
            </td>
        </tr>
    @endforeach
</tbody>

                </table>

                <div class="actions">
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        Adicionar Aluno
                    </a>

                    <a href="{{ route('pagina_inicial') }}" class="btn btn-secondary">
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
        height: 90vh;
        background-color: #f4f7f9;
        font-family: 'Roboto', sans-serif;
        padding: 20px; /* Padding para evitar que os elementos toquem as bordas em telas menores */
    }

    .box {
        width: 90%;
        max-width: 1200px; /* Ajustado para largura máxima menor */
        padding: 20px;
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border: 1px solid #e0e0e0;
    }

    .header {
        text-align: center;
        margin-bottom: 30px; /* Espaço padrão para telas maiores */
    }

    .header img {
        width: 100%;
        max-width: 300px; /* Ajuste para imagem em dispositivos móveis */
        border-radius: 8px;
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
        table-layout: auto; /* Ajusta automaticamente o tamanho das colunas */
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
            width: 400pxZ; /* Aumenta a largura para telas menores */
            padding: 50px;
        }

        .header {
            margin-bottom: 700px; /* Espaço maior abaixo do header em telas menores */
        }

        .header img {
            max-width: 2500px;
        }

        .title {
            font-size: 1.2rem;/*  */
        }

        .table {
            display: block;
            overflow-x: auto; /* Permite rolar horizontalmente em dispositivos móveis */
            white-space: nowrap; /* Impede quebra de linha nas células */
        }

        .table thead {
            display: none; /* Esconde o cabeçalho da tabela */
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
            content: attr(data-label); /* Adiciona rótulos às células */
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

    /* Para telas maiores, ajustar o espaço abaixo do header */
    @media (min-width: 769px) {
        .header {
            margin-bottom: 30px; /* Espaço menor para telas maiores */
        }
    }
</style>


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
                            <th>Nome</th>
                            <th>Matrícula</th>
                            <th>Orientador</th>
                            <th>Estágio do TCC</th>
                            <th>Data de Criação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->matricula }}</td>
                                <td>{{ $aluno->orientador ? $aluno->orientador->nome : 'Não atribuído' }}</td>
                                <td>{{ $aluno->estagio_do_tcc }}</td>
                                <td>{{ $aluno->created_at }}</td>
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
        height: 100vh;
        background-color: #f5f5f5;
    }

    .box {
        width: 90%;
        max-width: 1200px;
        padding: 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header img {
        width: 100%;
        max-width: 300px;
    }

    .title {
        text-align: center;
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
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
    }

    .table th, .table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    .table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .actions {
        display: flex;
        justify-content: space-between;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
       
    }

    .btn-primary {
        background-color: rgba(255, 146, 72, 255);
        color: #fff;
    }

    .btn-primary:hover {
        background-color: rgba(255, 146, 72, 255);
        transform: scale(1.05);
    }

    .btn-secondary {
        background-color: #4b9cd3;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #3a7fbf;
        transform: scale(1.05);
    }
</style>

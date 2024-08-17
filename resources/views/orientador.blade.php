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
            <form method="POST" action="{{ route('orientador') }}">
                @csrf

                <div class="p-field">
                    <h2 style="text-align: center;">Orientadores cadastrados:</h2>
                    
        

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Matrícula</th>
                            <th>Alunos</th>
                           
                            <th>Data de Criação</th>
                        </tr>
                    </thead>
                    <<tbody>
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
            <td>{{ $orientador->created_at }}</td>
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
            </form>
        </div>
    </div>
</div>
@endsection

<style scoped>

.aluno-lista {
    display: flex;
    flex-direction: column;
}

.aluno-item {
    margin-bottom: 5px; 
}

    #register {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
        background-color: #f5f5f5;
    }

    .box {
        width: 300%;
        max-width: 1300px;
        padding: 30px;
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
        padding: 20px 20px;
        border: none;
        border-radius: 5px;
        font-size: 3rem;
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


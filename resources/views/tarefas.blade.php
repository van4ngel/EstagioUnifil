@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerenciar Tarefas</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
     <div class="toldo">
    <h2 class="title">Tarefas registradas no sistema:</h2>

  
</div>


        <!-- Lista de tarefas -->
        <div class="task-list">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tema</th>
                        <th>Estágio do TCC</th>
                        <th>Data de Entrega</th>
                        <th>Link no Classroom</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if($tarefas->isEmpty())
                        <tr>
                            <td colspan="5">Nenhuma tarefa registrada.</td>
                        </tr>
                    @else
                        @foreach($tarefas as $tarefa)
                            <tr>
                                <td>{{ $tarefa->tema }}</td>
                                <td>{{ $tarefa->estagio }}</td>
                                <td>{{ \Carbon\Carbon::parse($tarefa->data_entrega)->format('d/m/Y') }}</td>

                                <td>
                                    @if($tarefa->link)
                                        <a href="{{ $tarefa->link }}" target="_blank">{{ $tarefa->link }}</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-warning">
                                        Modificar
                                    </a>
                                </td>
                            </tr>
                            
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="actions">
        <a href="{{ route('AdicionarTarefas') }}" class="btn btn-primary">
            Adicionar Tarefa
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
    }

    .box {
        width: 85%;
        max-width: 1400px;
        padding: 40px 60px;
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border: 1px solid #e0e0e0;
    }

    .header {
        text-align: center;
        margin-bottom: 30px;
    }

    .header img {
        width: 100%;
        max-width: 450px;
        border-radius: 10px;
    }

    .title {
        text-align: center;
        font-size: 3.0rem;
        color: #333;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 15px;
        margin-bottom: 30px;
    }

    .table th, .table td {
        padding: 20px;
        text-align: left;
        border-radius: 12px;
        font-size: 1.3rem;
        color: #333;
    }

    .table th {
        background-color: #007bff;
        color: #ffffff;
        font-weight: 700;
    }

    .table td {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
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
        gap: 20px;
    }

    .btn {
        display: inline-block;
        padding: 15px 30px;
        border: none;
        border-radius: 12px;
        font-size: 1.2rem;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
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
</style>

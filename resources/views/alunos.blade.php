

@extends('layouts.app')

@section('content')
<div id="register">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <div class="box">
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="p-field">
                <h2 style="text-align: center;">Alunos cadastrados:</h2>
                <table class="table table-bordered">
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
                                <td>{{ $aluno->orientador }}</td>
                                <td>{{ $aluno->estagio_do_tcc }}</td>
                                <td>{{ $aluno->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <a href="{{ route('register') }}" class="p-button p-button-success custom-btn">
                        Adicionar Aluno
                    </a>

                    <a href="{{ route('pagina_inicial') }}" class="p-button p-button-success custom-btn">
                        Voltar
                    </a>
                </div>
            </form>

            <!-- Adicionando a tabela de alunos cadastrados -->
           
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
    }

    .header {
        text-align: center;
        margin-bottom: 70px;
    }

    .header img {
        width: 100%;
        max-width: 400px;
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .p-field {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 15px;
        font-size: 18px; /* Aumenta o tamanho da fonte dos labels */
    }

    @media (max-width: 768px) {
        .box {
            width: 90%;
        }
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    .p-button,
    .custom-btn {
        padding: 7px;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 30px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(255, 146, 72, 255);
        color: black;
        text-decoration: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .p-button:hover,
    .custom-btn:hover {
        transform: translateY(-2px);
        background-color: rgba(255, 146, 72, 255);
        color: white;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }
</style>


<style scoped>
    #register {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
    }

    .header {
        text-align: center;
        margin-bottom: 70px;
    }

    .header img {
        width: 100%;
        max-width: 400px;
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .p-field {
        display: flex;
        flex-direction: column;
    }

    label {
    margin-bottom: 15px;
    font-size: 18px; /* Aumenta o tamanho da fonte dos labels */
}


    @media (max-width: 768px) {
        .box {
            width: 90%;
        }
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    .p-button,
    .custom-btn {
        padding: 7px;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 30px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(255, 146, 72, 255);
        color: black;
        text-decoration: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .p-button:hover,
    .custom-btn:hover {
        transform: translateY(-2px);
        background-color: rgba(255, 146, 72, 255);
        color: white;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }
</style>

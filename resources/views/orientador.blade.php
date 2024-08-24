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
                            <td>{{ $orientador->created_at }}</td>
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
        background-color: #f4f7f9; /* Fundo mais suave e moderno */
        font-family: 'Roboto', sans-serif; /* Fonte moderna e limpa */
    }

    .box {
        width: 85%;
        max-width: 1400px; /* Largura máxima maior */
        padding: 40px 60px; /* Mais padding para um layout mais espaçoso */
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Sombra mais suave */
        overflow: hidden;
        border: 1px solid #e0e0e0; /* Borda sutil ao redor do container */
    }

    .header {
        text-align: center;
        margin-bottom: 30px;
    }

    .header img {
        width: 100%;
        max-width: 450px; /* Tamanho máximo da imagem aumentado */
        border-radius: 10px; /* Arredondamento das bordas da imagem */
    }

    .title {
        text-align: center;
        font-size: 3.5rem; /* Fonte ainda maior para o título */
        color: #333;
        margin-bottom: 30px;
        font-weight: 700; /* Negrito para destacar o título */
    }

    .toldo {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .table {
        width: 100%;
        border-collapse: separate; /* Bordas separadas para linhas */
        border-spacing: 0 15px; /* Espaçamento maior entre as linhas */
        margin-bottom: 30px;
    }

    .table th, .table td {
        padding: 20px;
        text-align: left;
        border-radius: 12px; /* Bordas arredondadas mais acentuadas */
        font-size: 1.3rem; /* Fonte maior para as células da tabela */
        color: #333;
    }

    .table th {
        background-color: #007bff; /* Cor de fundo dos cabeçalhos da tabela */
        color: #ffffff;
        font-weight: 700;
    }

    .table td {
        background-color: #ffffff;
        border: 1px solid #e0e0e0; /* Borda mais leve nas células */
    }

    .table tr:nth-child(even) td {
        background-color: #f9f9f9;
    }

    .table tr:hover td {
        background-color: #f1f1f1; /* Cor de fundo mais destacada ao passar o mouse */
    }

    .actions {
        display: flex;
        justify-content: space-between;
        gap: 20px; /* Espaçamento entre os botões */
    }

    .btn {
        display: inline-block;
        padding: 15px 30px;
        border: none;
        border-radius: 12px; /* Bordas mais arredondadas */
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
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Sombra mais suave no hover */
    }

    .btn-secondary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Sombra mais suave no hover */
    }
</style>


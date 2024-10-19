@extends('layouts.app')

@section('content')
<div class="container">
    <title>Listar Bancas</title>
    <h1>Notas das Bancas</h1>

    @if($notasAgrupadas->isEmpty())
        <p>Não há notas cadastradas.</p>
    @else
        <div class="table-responsive"> <!-- Adicionando responsividade -->
            <table class="table table-striped table-bordered"> <!-- Estilo da tabela -->
                <thead>
                    <tr>
                        <th>Data da Banca</th>
                        <th>Aluno</th>
                        <th>Orientador</th>
                        <th>Média Total</th>
                        <th>Status</th> <!-- Nova coluna para Status -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($notasAgrupadas as $grupo)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($grupo['banca']->data_banca)->format('d/m/Y') }}</td>
                            <td>{{ $grupo['aluno']->nome }}</td>
                            <td>{{ $grupo['orientador']->nome }}</td>
                            <td>{{ number_format($grupo['media_geral'], 2) }}</td>
                            <td>
                                @if($grupo['media_geral'] >= 7)
                                    <span class="text-success">Aprovado</span>
                                @else
                                    <span class="text-danger">Reprovado</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('pagina_inicial') }}" class="btn btn-secondary mb-3">Voltar</a> 
        </div>
    @endif
</div>
@endsection

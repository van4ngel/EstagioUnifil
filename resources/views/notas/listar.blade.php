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
                        <th>Nota de Orientação</th>
                        <th>Nota de Apresentação</th>
                        <th>Nota de Relatório</th>
                        <th>Média Total</th>
                        <th>Status</th>
                        <th>Ações</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach($notasAgrupadas as $grupo)
                    @php
                        // Inicializa as variáveis para média e contador
                        $mediaTotal = 0;
                        $contadorNotas = 0;
                    @endphp

                    <!-- Exibe as informações do aluno apenas uma vez -->
                    <tr>
                        <td data-label="Data da Banca" rowspan="{{ count($grupo['notas']) }}">{{ \Carbon\Carbon::parse($grupo['banca']->data_banca)->format('d/m/Y') }}</td>
                        <td data-label="Aluno" rowspan="{{ count($grupo['notas']) }}">{{ $grupo['aluno']->nome }}</td>

                        @foreach($grupo['notas'] as $nota)
                            @php
                                // Calcula a média de cada nota individualmente
                                $notaMedia = ($nota->nota_orientacao + $nota->nota_apresentacao + $nota->nota_relatorio) / 3;
                                $mediaTotal += $notaMedia;
                                $contadorNotas++;
                            @endphp

                            <!-- Exibe as informações do orientador e as notas -->
                            <td data-label="Orientador">{{ $nota->orientador->nome }}</td>
                            <td data-label="Nota de Orientação">{{ number_format($nota->nota_orientacao, 2) }}</td>
                            <td data-label="Nota de Apresentação">{{ number_format($nota->nota_apresentacao, 2) }}</td>
                            <td data-label="Nota de Relatório">{{ number_format($nota->nota_relatorio, 2) }}</td>

                            @if ($loop->last)
                                @php
                                    // Calcula a média final do aluno após todas as notas
                                    $mediaFinal = $mediaTotal / $contadorNotas;
                                @endphp
                                <td data-label="Média Total">{{ number_format($mediaFinal, 2) }}</td>
                                <td data-label="Status">
                                    @if($mediaFinal >= 7)
                                        <span class="text-success">Aprovado</span>
                                    @else
                                        <span class="text-danger">Reprovado</span>
                                    @endif
                                </td>
                            @else
                                <td data-label="Média Total"></td>
                                <td data-label="Status"></td>
                            @endif

                            <td data-label="Ações">
                                <a href="{{ route('notas.edit', $nota->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('pagina_inicial') }}" class="btn btn-secondary mb-3">Voltar</a> 
        </div>
    @endif
</div>
@endsection

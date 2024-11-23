@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Lista de Alunos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome do Aluno</th>
                <th>Matrícula</th>
                <th>Registrar Orientação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->matricula }}</td>
                    <td>
                        <a href="{{ route('orientacoes.create', $aluno->id) }}" class="btn btn-success btn-sm">Registrar Orientação</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center my-4">
        <a href="{{ route('Admin') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection

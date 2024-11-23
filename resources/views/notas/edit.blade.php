@extends('layouts.app')

@section('content')
<div class="container">
<title>Bancas Notas</title>
    <h1>Editar Nota - Banca {{ $banca->id }}</h1>
    <form action="{{ route('notas.update', $nota->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nota_orientacao" class="form-label">Nota Orientação</label>
            <input type="number" name="nota_orientacao" id="nota_orientacao" class="form-control" 
                   value="{{ $nota->nota_orientacao }}" step="0.1" min="0" max="10">
        </div>

        <div class="mb-3">
            <label for="nota_apresentacao" class="form-label">Nota Apresentação</label>
            <input type="number" name="nota_apresentacao" id="nota_apresentacao" class="form-control" 
                   value="{{ $nota->nota_apresentacao }}" step="0.1" min="0" max="10">
        </div>

        <div class="mb-3">
            <label for="nota_relatorio" class="form-label">Nota Relatório</label>
            <input type="number" name="nota_relatorio" id="nota_relatorio" class="form-control" 
                   value="{{ $nota->nota_relatorio }}" step="0.1" min="0" max="10">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        <a href="{{ route('notas.listar', $banca->id) }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection


<style scoped>
    /* Estilo geral */
  
    /* Animação de entrada */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Títulos */
    h1 {
        font-size: 24px;
        text-align: center;
        color: #444;
        margin-bottom: 20px;
        font-weight: bold;
    }

    /* Campos do formulário */
    .mb-3 {
        margin-bottom: 15px;
    }

    .form-label {
        font-size: 16px;
        font-weight: bold;
        color: #555;
        margin-bottom: 8px;
        display: block;
    }

    .form-control {
        width: 100%;
        padding: 10px 12px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background: #f9f9f9;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #f09b39;
        box-shadow: 0 0 10px rgba(240, 155, 57, 0.5);
        outline: none;
    }

    /* Botões */
    .btn {
        display: inline-block;
        padding: 12px 20px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .btn-success {
        background: linear-gradient(135deg, #f09b39, #d87a31);
        color: #fff;
    }

    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .btn-secondary {
        background: linear-gradient(135deg, #ddd, #bbb);
        color: #333;
        margin-left: 10px;
    }

    .btn-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .container {
            width: 95%;
            padding: 20px;
        }

        h1 {
            font-size: 20px;
        }

        .form-label {
            font-size: 14px;
        }

        .form-control {
            font-size: 14px;
        }

        .btn {
            font-size: 14px;
            padding: 10px 15px;
        }
    }
</style>

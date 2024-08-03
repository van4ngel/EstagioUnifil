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
            <form method="POST" action="{{ route('tarefas') }}">
                @csrf

                <div class="p-field">
                    <h2 style="text-align: center;">teste tarefas</h2>
                 
              
                
</div>
           
@endsection

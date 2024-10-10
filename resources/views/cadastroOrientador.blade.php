@extends('layouts.app')

@section('content')
<div id="register">
    <div class="box">
    <title>Cadastro</title>
        <div class="header">
            <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
        </div>
        <div class="toldo">
            <form method="POST" action="{{ route('cadastroOrientador') }}">
                @csrf
                <div class="p-field">
                    <h2 style="text-align: center;">Preencha as informações para se cadastrar:</h2>
                    
                    <!-- Campo Matrícula -->
                    <label for="email">Matrícula:</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
             <!-- Campo Senha -->
<div class="p-field">
    <label for="password">Senha:</label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<!-- Campo Confirmação de Senha -->
<div class="p-field">
    <label for="password-confirm">Confirme a Senha:</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</div>


                <!-- Botão de Registro -->
                <div class="p-field">
                    <button type="submit" class="p-button p-button-success">
                        Registrar
                    </button>
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
    margin-bottom: 5px;
    font-size: 18px; /* Aumenta o tamanho da fonte dos labels */
}

@media (max-width: 768px) {
    .box {
        width: 90%;
    }
}

input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
    margin-bottom: 5px;
    border-radius: 10px;
}

.p-button {
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 30px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: rgba(255, 146, 72, 255);
    color: black;
    transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
}

.p-button:hover {
    background-color: #45a049;
}
</style>

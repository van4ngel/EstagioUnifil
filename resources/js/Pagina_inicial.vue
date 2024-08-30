<style scoped>
  .header {
    text-align: center;
    margin-top: 60px;
    padding-bottom: 20px;
    transform: translateX(-4vw); 
  }

  .header img {
    width: 100%;
    max-width: 400px;
    margin-bottom: 20px; /* Ajustado para manter um espaçamento adequado abaixo da imagem */
    animation: float 3s ease-in-out infinite;
    
  }

  @keyframes float {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 190vw;
    height: 80vh;
    background: linear-gradient(135deg, #f5f7fa, #ebebeb);
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transform: translateX(-4vw); /* Ajuste o valor conforme necessário */
}


  .table {
    display: table;
    width: auto;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .row {
    display: table-row;
  }

  .cell {
    display: table-cell;
    padding: 20px;
    text-align: center;
    vertical-align: middle;
  }

  .p-button {
    display: inline-block; 
    padding: 15px 25px;
    border: none;
    border-radius: 30px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    width: 290px; 
    height: 60px; 
    text-transform: uppercase;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    margin: 20px; 
    overflow: hidden; 
    text-align: center;
    line-height: 40px; 
  }

  .p-button:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
  }

  .p-button-success {
    background-color: #f09b39;
    color: black;
  }

  .p-button-secondary {
    background-color: #f09b39;
    color: black;
  }

  .p-button-warning {
    background-color: #f09b39;
    color: black;
  }

  .p-button-danger {
    background-color: #f09b39;
    color: black;
  }

  .p-button-success:hover, .p-button-secondary:hover, .p-button-warning:hover, .p-button-danger:hover {
    filter: brightness(1.1);
  }
</style>


<template>
  <div class="add-student">
    <div class="header">
      <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
    </div>

    <div class="container">
      <div class="table">
        <div class="row">
          <div class="cell">
            <a href="/alunos" class="p-button p-button-success">Gerenciar Aluno</a>
          </div>
          <div class="cell">
            <a href="/orientador" class="p-button p-button-secondary">Gerenciar Orientador</a>
          </div>
        </div>
        <div class="row">
          <div class="cell">
            <a href="/bancas" class="p-button p-button-success">Gerenciar Bancas</a>
          </div>
          <div class="cell">
            <a href="/App" class="p-button p-button-warning">Gerenciar Notas</a>
          </div>
        </div>
        <div class="row">
          <div class="cell">
            <a href="/App" class="p-button p-button-secondary">Registro de orientações</a>
          </div>

 
          <div class="cell">
            <a href="/tarefas" class="p-button p-button-secondary">Gerenciar tarefas</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

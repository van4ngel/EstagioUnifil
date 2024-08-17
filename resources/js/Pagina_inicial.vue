<style scoped>
  .header {
    text-align: center;
    margin-top: 90px;
  }

  .header img {
    width: 100%;
    max-width: 400px;
    margin-bottom: -100px;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 98vw;
    height: 80vh;
  }

  .table {
    display: table;
    width: auto;
    border-collapse: collapse;
    margin: 0 auto;
  }

  .row {
    display: table-row;
  }

  .cell {
    display: table-cell;
    padding: 10px;
    text-align: center;
    vertical-align: middle;
  }

  .p-button {
    padding: 15px; /* Ajustado para maior área de clique */
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    width: 200px; /* Largura fixa para todos os botões */
    display: inline-flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 10px;
    margin-bottom: 40px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
  }

  .p-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
  }

  .p-button-success {
    background-color: rgba(255, 146, 72, 255);
    color: black;
  }

  .p-button-success:hover {
    background-color: #45a049;
    color: white;
  }

  .p-button-secondary {
    background-color: rgba(255, 146, 72, 255);
    color: black;
  }

  .p-button-secondary:hover {
    background-color: #45a049;
    color: white;
  }

  .p-button-danger {
    background-color: rgba(255, 146, 72, 255);
    color: black;
  }

  .p-button-danger:hover {
    background-color: #45a049;
    color: white;
  }

  .p-button-warning {
    background-color: rgba(255, 146, 72, 255);
    color: black;
  }

  .p-button-warning:hover {
    background-color: #45a049;
    color: white;
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
            <a href="/alunos" class="p-button p-button-success" >Gerenciar Aluno</a>
          </div>

          <div class="cell">
            <a href="/orientador" class="p-button p-button-secondary">Gerenciar Orientador</a>
          </div>

          <div class="row"></div>
          <div class="cell">
            <a href="/bancas" class="p-button p-button-success">Gerenciar Bancas</a>
          </div>

          <div class="cell">
            <a href="/App" class="p-button p-button-warning">Gerenciar Notas</a>
          </div>

        

          <div class="cell">
            <a href="/App" class="p-button p-button-secondary">Registro de orientações</a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</template>

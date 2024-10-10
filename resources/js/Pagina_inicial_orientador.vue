<style scoped>
  .header {
    text-align: center;
    margin-top: 40px;
    padding-bottom: 15px;
  }

  .header img {
    width: 100%;
    max-width: 300px;
    margin-bottom: 15px;
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
    width: 80vw;
    max-width: 1000px; /* Aumentado para dar mais espaço horizontal */
    height: 80vh; /* Mantido 100% da altura da tela */
    background: linear-gradient(135deg, #f5f7fa, #ebebeb);
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    padding: 30px; /* Aumentado o padding */
    flex-wrap: wrap;
    margin: 0 auto;
  }

  /* Grid layout com 3 colunas */
  .table {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 botões por linha */
    gap: 30px; /* Aumentado o espaçamento entre os botões */
    width: 100%;
    height: 40vh; /* Aumentado para ocupar mais espaço vertical */
    background-color: #fff;
    border-radius: 20px; /* Aumentado o border-radius */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    padding: 30px; /* Aumentado o padding interno */
  }

  .cell {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .p-button {
    display: inline-block;
    padding: 12px 20px;
    border: none;
    border-radius: 25px;
    font-size: 13px;
    font-weight: bold;
    cursor: pointer;
    width: 250px;
    height: 50px;
    text-transform: uppercase;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    margin: 10px;
    overflow: hidden;
    text-align: center;
    line-height: 30px;
  }

  .p-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .p-button-success, .p-button-secondary, .p-button-warning, .p-button-danger {
    background-color: #f09b39;
    color: black;
  }

  .p-button-success:hover, .p-button-secondary:hover, .p-button-warning:hover, .p-button-danger:hover {
    filter: brightness(1.1);
  }

  /* Ajustes responsivos */
  @media (max-width: 768px) {
    .container {
      width: 90vw;
      height: auto; /* Altura ajustável para telas menores */
    }

    .table {
      grid-template-columns: 1fr; /* Botões empilhados em telas pequenas */
      height: auto; /* Deixar o contêiner interno com altura ajustável */
    }

    .p-button {
      width: 100%;
      font-size: 10px;
      height: 40px;
      padding: 10px 15px;
    }
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
            <a href="/alunos" class="p-button p-button-success">Vizualizar Aluno</a>
          </div>
          
        </div>
        <div class="row">
          <div class="cell">
            <a href="/bancas" class="p-button p-button-success">Vizualizar ou realizar Bancas</a>
          </div>
         
        </div>
        <div class="row">
          <div class="cell">
            <a href="/App" class="p-button p-button-secondary">Registro de orientações</a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</template>

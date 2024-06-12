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
  padding: 10px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 10px;
  
  margin-bottom: 40px;
}

.p-button-success {
  background-color: rgba(255,146,72,255);
  color: black;
}

.p-button-success:hover {
  background-color: #45a049;
}

.p-button-secondary {
  background-color: rgba(255, 146, 72, 255);
  color: black;
}

.p-button-secondary:hover {
  background-color: #45a049;
}

.p-button-danger {
  background-color: rgba(255, 146, 72, 255);
  color: black;
}

.p-button-danger:hover {
  background-color: #45a049;
}

.p-button-warning {
  background-color: rgba(255, 146, 72, 255);
  color: black;
}

.p-button-warning:hover {
  background-color: #45a049;
}
 #sair{
  padding: 190%;
  font-size: 16px;
  cursor: pointer;
  align-items: center

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
            <a href="/register" class="p-button p-button-success" @click="addStudent">Adicionar Aluno</a>
          </div>
          <div class="cell">
            <a href="/App" class="p-button p-button-secondary">Opção 2</a>
          </div>
          <div class="cell">
            <a href="/App" class="p-button p-button-danger">Opção 3</a>
          </div>
          <div class="cell">
            <a href="/App" class="p-button p-button-warning">Opção 4</a>
          </div>
        </div>
        <div class="row">
          <div class="cell">
            <a href="/App" class="p-button p-button-success">Opção 5</a>
          </div>
          <div class="cell">
            <a href="/App" class="p-button p-button-secondary">Opção 6</a>
          </div>
          <div class="cell">
            <a href="/App" class="p-button p-button-danger">Opção 7</a>
          </div>
          <div class="cell">
            <a href="/App" class="p-button p-button-warning">Opção 8</a>
          </div>
          
        </div>

        
  
      </div>
      
    </div>
    
  </div>
</template>



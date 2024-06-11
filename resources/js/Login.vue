<style scoped>

#login {
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
}



@media (max-width: 768px) {
  .box {
    width: 90%;
  }
}

input[type="text"],
select {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  font-size: 16px;
  margin-bottom: 5px;
  border-radius: 10px;
}


select {
  border-radius: 10px;
  background-color: #121212; 
}


.p-button {
  
  padding: 10px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 30px;
  margin-left: 80vh;
  width: 10vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  
}

.p-button-success {
  background-color:rgba(255,146,72,255); 
  color: black;
 
}

.p-button-success:hover {
  background-color: #45a049; 
}

.p-radiobutton input[type="radio"] {
  transform: scale(1.5); 
 
}



</style>

<template>
  <div id="login">
    <div class="box">
      <div class="header">
        <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
      </div>
      <div class="toldo">
        <div class="p-field">
          <h2 style="text-align: center;">Preencha as informações abaixo para acessar o portal:</h2>
          <label for="matricula">Matrícula:</label>
          <br>
          <input id="matricula" v-model="matricula" type="text" />
        </div>
        <div class="p-field">
          <label for="senha">Senha: </label>
          <br>
          <input id="senha" v-model="senha" type="password" />
        </div>
        <div class="p-field">
          <a href="#" class="p-button p-button-success" ">Entrar</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

</script>



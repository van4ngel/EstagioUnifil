<style scoped>


.toldo{
  padding-top: 100px;
}

.header {
  text-align: center;
  
 
}

.header img {
  width: 400px;
 
}

.p-field {
  margin-top: 20px;
  
}

label {
  display: block;

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

/* Estilo para os botões */
.p-button {
  
  padding: 10px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 30px;
  margin-left: 60vh;
 
}


.p-button-success {
  background-color:rgba(255,146,72,255); 
  color: black;
  text-align: center;
 
}

.p-button-success:hover {
  background-color: #45a049; 
}


.p-radiobutton input[type="radio"] {
  transform: scale(1.5); 
 
}


</style>



<template>
  <div class="add-student">
    <div class="header">
      <img src="https://web.unifil.br/eventos/intercursos/imagens/logo-menu.png" alt="Header Image">
    </div>
 <div class =" toldo">
    <div class="p-field">
      <h2>Preencha as informações abaixo para adicionar novo Aluno</h2>
      <label for="fullName">Nome Completo do aluno:</label>
      <br>
      <input id="fullName" v-model="fullName" type="text" />
    </div>
    <div class="p-field">
      <label for="studentId">Matrícula do aluno:</label>
      <br>
      <input id="studentId" v-model="studentId" type="text" />
    </div>
    <div class="p-field">
      <label for="advisorDropdown">Orientador Responsável:</label>
      <br>
      <select id="advisorDropdown" v-model="selectedAdvisor">
       
        <option v-for="advisor in advisorsOptions" :key="advisor.id" :value="advisor.id">{{ advisor.name }}</option>
      </select>
    </div>
    <div class="p-field">
      <label>Período do TCC que o aluno se encontra:</label>
      <br>
      <div class="period-options">
        <div class="p-radiobutton" v-for="period in tccPeriodOptions" :key="period.value">
          <input type="radio" name="tccPeriod" :id="'tcc' + period.value" v-model="selectedTccPeriod" :value="period.value" />
          <label :for="'tcc' + period.value" style="margin-top: 25px; margin-left: -15px;">{{ period.label }}</label>
        </div>
      </div>
    </div>
    <div class="p-field">
    <a href="/App" class="p-button p-button-success" @click="addStudent">Adicionar Aluno</a>
  </div>
  <a href="/Pagina_inicial" class="p2-button p2-button-success" @click="addStudent">Voltar</a>
  </div>
</div>
</template>


<script>
import { ref, onMounted } from 'vue';

export default {
  setup() {
    const fullName = ref('');
    const studentId = ref('');
    const selectedAdvisor = ref(null);
    const selectedTccPeriod = ref(null);
    const advisorsOptions = ref([]);
    const tccPeriodOptions = [
      { value: 1, label: '1º' },
      { value: 2, label: '2º' },
      { value: 3, label: '3º' },
      { value: 4, label: '4º' }
    ];

    const fetchAdvisors = () => {
      // Simulação de uma chamada de API para obter os orientadores do banco de dados
      const fakeApiResponse = [
        { id: 1, name: 'João Silva' },
        { id: 2, name: 'Maria Oliveira' },
        { id: 3, name: 'José Santos' }
      ];
      advisorsOptions.value = fakeApiResponse;
    };

    onMounted(() => {
      fetchAdvisors(); // Chamada de API quando o componente é montado
    });

    const addStudent = () => {
      console.log('Aluno Adicionado:', {
        fullName: fullName.value,
        studentId: studentId.value,
        selectedAdvisor: selectedAdvisor.value,
        selectedTccPeriod: selectedTccPeriod.value
      });
      fullName.value = '';
      studentId.value = '';
      selectedAdvisor.value = null;
      selectedTccPeriod.value = null;
    };

    return {
      fullName,
      studentId,
      selectedAdvisor,
      selectedTccPeriod,
      advisorsOptions,
      tccPeriodOptions,
      addStudent
    };
  }
};
</script>


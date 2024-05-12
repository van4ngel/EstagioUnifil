import { createApp } from 'vue';
import App from './App.vue';

//PrimeVue imports
import PrimeVue from 'primevue/config';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';

import 'primevue/resources/themes/aura-dark-blue/theme.css'
import 'primeicons/primeicons.css'

 
const app = createApp({})
app.use(PrimeVue)
// PrimeVue load components
app.component('Button', Button)
app.component('InputText', InputText)

app.component('app-example', App)
app.mount('#app')
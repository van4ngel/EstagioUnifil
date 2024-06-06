import { createApp } from 'vue';
import App from './App.vue';


//PrimeVue imports

import PrimeVue from 'primevue/config';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import Card from 'primevue/card';
import Toolbar from 'primevue/toolbar';
import Panel from 'primevue/panel';
import Checkbox from 'primevue/checkbox';
import Dropdown from 'primevue/dropdown';

import Image from 'primevue/image';

import 'primevue/resources/themes/aura-dark-blue/theme.css'
import 'primeicons/primeicons.css'

 
const app = createApp({})
app.use(PrimeVue)
// PrimeVue load components
app.component('Button', Button)
app.component('InputText', InputText)
app.component('Card', Card)
app.component('toolbar', Toolbar)
app.component('panel', Panel)
app.component('checkbox', Checkbox)
app.component('dropdown',Dropdown )
app.component('Image', Image)
app.component('app-example', App)
app.mount('#app')


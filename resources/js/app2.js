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

 

const app2 = createApp(App)
app2.use(PrimeVue)
// PrimeVue load components
app2.component('Button', Button)
app2.component('InputText', InputText)
app2.component('Card', Card)
app2.component('toolbar', Toolbar)
app2.component('panel', Panel)
app2.component('checkbox', Checkbox)
app2.component('dropdown',Dropdown )
app2.component('Image', Image)
app2.component('app-example', App)
app2.mount('#app2')

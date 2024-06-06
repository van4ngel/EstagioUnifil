import { createApp } from 'vue';
import Login from './Login.vue';


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

 
const login = createApp(Login)
login.use(PrimeVue)
// PrimeVue load components
login.component('Button', Button)
login.component('InputText', InputText)
login.component('Card', Card)
login.component('toolbar', Toolbar)
login.component('panel', Panel)
login.component('checkbox', Checkbox)
login.component('dropdown',Dropdown )
login.component('Image', Image)
login.component('app-example3', Login)
login.mount('#login')


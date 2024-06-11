import { createApp } from 'vue';
import PaginaInicial from './Pagina_inicial.vue'; 

// PrimeVue imports
import PrimeVue from 'primevue/config';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import Card from 'primevue/card';
import Toolbar from 'primevue/toolbar';
import Panel from 'primevue/panel';
import Checkbox from 'primevue/checkbox';
import Dropdown from 'primevue/dropdown';
import Image from 'primevue/image';

// PrimeVue CSS
import 'primevue/resources/primevue.min.css'; 
import 'primevue/resources/themes/aura-dark-blue/theme.css';
import 'primeicons/primeicons.css';

const pagina_inicial = createApp(PaginaInicial); 

pagina_inicial.use(PrimeVue);

// Register PrimeVue components
pagina_inicial.component('Button', Button);
pagina_inicial.component('InputText', InputText);
pagina_inicial.component('Card', Card);
pagina_inicial.component('Toolbar', Toolbar); 
pagina_inicial.component('Panel', Panel);
pagina_inicial.component('Checkbox', Checkbox);
pagina_inicial.component('Dropdown', Dropdown);
pagina_inicial.component('Image', Image);
pagina_inicial.component('app-example2', PaginaInicial); 

pagina_inicial.mount('#pagina_inicial'); 



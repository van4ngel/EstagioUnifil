import { createApp } from 'vue';
import Pagina_inicial_orientador from './Pagina_inicial_orientador.vue'; 

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

const app = createApp(Pagina_inicial_orientador); // Corrigido para 'app'

app.use(PrimeVue);

// Register PrimeVue components
app.component('Button', Button);
app.component('InputText', InputText);
app.component('Card', Card);
app.component('Toolbar', Toolbar); 
app.component('Panel', Panel);
app.component('Checkbox', Checkbox);
app.component('Dropdown', Dropdown);
app.component('Image', Image);

app.mount('#pagina_inicial_orientador'); // Corrigido para 'app'

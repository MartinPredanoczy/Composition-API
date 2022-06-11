import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from "./components/router";
import CompaniesIndex from './components/companies/CompaniesIndex.vue'

const app = createApp({
    components: {
        CompaniesIndex: 'companies-index',
    }
});
app.use(router);
app.mount('#app');

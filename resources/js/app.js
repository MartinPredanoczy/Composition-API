import './bootstrap';

import Alpine from 'alpinejs';

import { createApp } from 'vue';
import router from "./router";
import CompaniesIndex from './components/companies/CompaniesIndex.vue'

const app = createApp({
    components: {
        CompaniesIndex
    }
});
app.use(router);
app.mount('#app');


window.Alpine = Alpine;

Alpine.start();



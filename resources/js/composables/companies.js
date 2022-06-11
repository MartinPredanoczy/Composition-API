import { ref } from 'vue';
import axios from 'axios';

export default function useCompanies() {
    // tu definujeme metody a properties
    const companies = ref([])

    const getCompanies = async () => {
        let response = await axios.get('/api/companies');
        companies.value = response.data.data;
    }

    return {
        companies,
        getCompanies,
    }
}

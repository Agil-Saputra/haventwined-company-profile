import { ref, onMounted } from "vue";
import axios from "axios";

export default function useFetch(url) {
    const data = ref(null);
    const isLoading = ref(true);
    const error = ref(null);

    const fetchData = async () => {
        isLoading.value = true;
        try {
            const response = await axios.get(url);
            data.value = response.data.data; // Adjust based on API response structure
        } catch (err) {
            error.value = err.message;
        } finally {
            isLoading.value = false;
        }
    };

    onMounted(fetchData);

    return { data, isLoading, error, fetchData };
}

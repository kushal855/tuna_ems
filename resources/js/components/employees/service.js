import axios from "axios"

export default {
    data() {
        return {

        }
    },
    methods: {
        getEmployees() {
            return axios({
                method: 'GET',
                url: '/api/employees'
            });
        }
    }
}
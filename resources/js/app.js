require('./bootstrap');

window.Vue = require('vue')


import router from './router'
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

Vue.component('mainapp', require('./components/mainapp.vue').default)

const app = new Vue({
    el: '#app',
    router
});
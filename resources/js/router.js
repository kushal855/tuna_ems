import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
import dashboard from './components/dashboard'
import employeesList from './components/employees/list'
import employeesUpdate from './components/employees/update'

const routes = [
    {
        path: '/list-employees',
        component: employeesList
    },
    {
        path: '/update-employees',
        component: employeesUpdate,
        name: 'employeesUpdate'
    },
    {
        path: '/',
        component: dashboard
    }
]

export default new Router({
    mode: 'history',
    routes,
    linkActiveClass: "active"
});
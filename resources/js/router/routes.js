import Home from '../views/Home.vue';
import Stats from '../views/Stats.vue';
import Form from '../views/Forms.vue';
import LogIn from '../views/Login.vue';

export default [
    {
        path: '/log-in',
        name: 'LogIn',
        component: LogIn
    },
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path:'/forms',
        name: 'forms',
        component: Form
    },
];

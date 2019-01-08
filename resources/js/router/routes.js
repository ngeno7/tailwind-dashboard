import Home from '../views/Home.vue';
import Stats from '../views/Stats.vue';
import Form from '../views/Forms.vue';
export default [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path:'/stats',
        name: 'stats',
        component: Stats
    },
    {
        path:'/forms',
        name: 'forms',
        component: Form
    }
];

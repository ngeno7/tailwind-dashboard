require('./bootstrap');

window.Vue = require('vue');
import router from './router';
import App from './components/App.vue';
import EventBus from './event-bus'
Vue.use(EventBus);

const app = new Vue({
    el: '#app',
    components: { App },
    router
});

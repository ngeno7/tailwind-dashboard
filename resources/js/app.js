require('./bootstrap');

window.Vue = require('vue');
import router from './router';
import App from './components/App.vue';
import EventBus from './plugins/event-bus';
import Components from './plugins/components';

Vue.use(EventBus);
Vue.use(Components);

const app = new Vue({
    el: '#app',
    components: { App },
    router
});

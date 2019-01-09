import Vue from 'vue';

export const EventBus = new Vue();

export default {
    install(Vue, opts) {   
        Vue.prototype.$EventBus = EventBus;
    }
}

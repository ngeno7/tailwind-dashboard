import Vue from 'vue';
import BaseLayout from '../../components/Layout.vue';

export default {
  install(Vue, opts) {
      Vue.component('base-layout', BaseLayout);
  }
}

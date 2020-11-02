import VueRouter from 'vue-router'
import routes from './routes'
import { BootstrapVue } from 'bootstrap-vue'
import VueMeta from 'vue-meta'

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(BootstrapVue)
Vue.use(VueMeta)

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});

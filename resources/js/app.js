import Vue from 'vue';
import VueRouter from 'vue-router'
require('./bootstrap');

// window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
/*   Router   */   
import exampleComponent from './components/ExampleComponent.vue' 
Vue.use(VueRouter)
const routes = [{
    path: '/',
    component: exampleComponent
  },
]
const router = new VueRouter({
  routes,
  mode: 'hash'
})
/*   end Router   */  

const app = new Vue({
    router
}).$mount('#app')

import Vue from 'vue';
import VueRouter from 'vue-router'
/*   Router   */   
import index from './components/index.vue' 
Vue.use(VueRouter)
const routes = [{
    path: '/',
    component: index
  },
]
const router = new VueRouter({
  routes,
  mode: 'history'
})
/*   end Router   */  

const app = new Vue({
    router
}).$mount('#app')

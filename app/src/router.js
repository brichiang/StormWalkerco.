import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Barber from './views/Barber.vue'
import User from './views/User.vue'
import CheckIn from './views/CheckIn.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/check_in',
      name: 'check_in',
      component: CheckIn
    },
    {
      path:'/barber',
      name: 'barber',
      component: Barber
    },
    {
      path:'/user',
      name: 'user',
      component: User
    },
  ]
})

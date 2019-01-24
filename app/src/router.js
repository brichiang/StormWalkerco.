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
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    },
  ]
})

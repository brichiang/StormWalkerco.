import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Barber_setup from './views/Barber-setup.vue'
import User from './views/User.vue'
import CheckIn from './views/CheckIn.vue'
import Barber from './views/Barber.vue'
import Services from './views/Services.vue'
import Contact from './views/Contact.vue'

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
      path:'/barber_setup',
      name: 'barber_setup',
      component: Barber_setup
    },
    {
      path:'/user',
      name: 'user',
      component: User
    },
    {
      path:'/barber',
      name: 'barber',
      component: Barber
    },
    {
      path:'/services',
      name: 'services',
      component: Services
    },
    {
      path:'/contact',
      name: 'contact',
      component: Contact
    },
  ]
})

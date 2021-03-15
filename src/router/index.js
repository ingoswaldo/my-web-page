import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/views/Home.vue'
import Meta from 'vue-meta'
import smoothScroll from 'smoothscroll-polyfill'

Vue.use(VueRouter)
Vue.use(Meta)

smoothScroll.polyfill()

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
  scrollBehavior (to) {
    let url = to.hash

    if (url === ''){
      return {
        x: 0,
        y:0,
        behavior: 'smooth'
      }
    }

    if (url) {
      return {
        selector: to.hash,
        behavior: 'smooth',
      }
    }
  }
})

export default router

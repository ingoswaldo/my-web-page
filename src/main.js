import Vue from 'vue'
import App from './App.vue'
import router from './router'
import AOS from 'aos'
import '@/assets/index.css'
import 'aos/dist/aos.css'

Vue.config.productionTip = false

new Vue({
  router,
  created() {
    AOS.init()
  },
  render: h => h(App)
}).$mount('#app')

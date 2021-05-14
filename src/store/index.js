import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex)

export default new Vuex.Store({
    strict: false,
    state: {
        menuActive: '#home'
    },
    mutations: {
        setMenuActive (state, payload) {
            state.menuActive = payload
        }
    },
    getters: {
        menuActive: state => {
            return state.menuActive
        }
    }
})

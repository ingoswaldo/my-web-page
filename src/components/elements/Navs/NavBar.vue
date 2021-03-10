<template>
  <nav class="py-0 md:py-8">
    <div class="max-w-7xl mx-auto | px-2 sm:px-6 lg:px-8">
      <div class="relative | flex | items-center justify-between | h-16">
        <div class="absolute | inset-y-0 | left-0 | flex items-center sm:hidden">
          <button type="button" class="inline-flex items-center justify-center | p-2 | rounded-md | focus:outline-none"
                  aria-controls="mobile-menu" aria-expanded="false">
            <svg class="h-6 w-6 | text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" aria-hidden="true" @click="openMenu" v-show="isCloseMenuIconHidden()">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>

            <svg class="h-6 w-6 | text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" aria-hidden="true" @click="closeMenu" v-show="showCloseMenuIcon">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>

        <div class="flex-1 flex | items-center justify-center | sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <logo class="block lg:hidden | h-12 w-auto | text-white"/>
            <logo class="hidden lg:block | h-12 w-auto | text-white"/>
          </div>
        </div>

        <div class="absolute | inset-y-0 | right-0 | hidden sm:flex items-center | pr-2 | sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <nav-link title="Home" :active="markAsRouteActive('Home')"/>
          <nav-link title="About" :active="markAsRouteActive('About')"/>
        </div>
      </div>
    </div>

    <div class="px-2 pt-2 pb-3 | space-y-1" v-show="showCloseMenuIcon">
      <nav-link title="Home" :active="markAsRouteActive('Home')"/>
    </div>
  </nav>
</template>

<script>
import Logo from "@/components/icons/Logo";
import NavLink from "@/components/elements/Navs/NavLink";

export default {
  name: "NavBar",
  components: {
    NavLink,
    Logo
  },
  data() {
    return {
      showCloseMenuIcon: false
    }
  },
  methods: {
    openMenu() {
      this.showCloseMenuIcon = true
    },

    closeMenu() {
      this.showCloseMenuIcon = false
    },

    isCloseMenuIconHidden() {
      return this.showCloseMenuIcon === false
    },

    getCurrentRouteName() {
      return this.$route.name
    },

    markAsRouteActive(routeName) {
      return routeName === this.getCurrentRouteName()
    },
  },
}
</script>

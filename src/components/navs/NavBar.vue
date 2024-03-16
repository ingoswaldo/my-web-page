<script setup>
import LogoIcon from "@/components/icons/LogoIcon.vue";
import NavLink from "@/components/navs/NavLink.vue";
import {ref} from "vue";
import ThreeHorizontalLinesIcon from "@/components/icons/ThreeHorizontalLinesIcon.vue";
import EquisIcon from "@/components/icons/EquisIcon.vue";
import {isAboutActive, isHomeActive, isPortfolioActive, isServiceActive} from "@/helpers/navbar.js";
import XlContainer from "@/components/containers/XlContainer.vue";

const showCloseMenuIcon = ref(false)

const openMenu = () => {
  showCloseMenuIcon.value = true
}

const closeMenu = () => {
  showCloseMenuIcon.value = false
}

const isCloseMenuIconHidden = () => {
  return showCloseMenuIcon.value === false
}
</script>

<template>
  <nav class="fixed | w-full | z-10 | top-0 | py-0 md:py-8 | bg-blue">
    <xl-container class="px-2 sm:px-6 lg:px-8">
      <div class="relative | flex | items-center justify-between | h-16">
        <div class="absolute | inset-y-0 | left-0 | flex items-center sm:hidden">
          <button type="button" class="inline-flex items-center justify-center | p-2 | rounded-md | focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
            <three-horizontal-lines-icon @click.prevent="openMenu" v-show="isCloseMenuIconHidden()" />
            <equis-icon @click.prevent="closeMenu" v-show="showCloseMenuIcon" />
          </button>
        </div>

        <div class="flex-1 flex | items-center justify-center | sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center line-drawing-demo">
            <logo-icon class="block lg:hidden | h-12 w-32 | text-white"/>
            <logo-icon class="hidden lg:block | h-16 w-auto | text-white"/>
          </div>
        </div>

        <div class="absolute | inset-y-0 | right-0 | hidden sm:flex items-center | pr-2 | sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <nav-link
              title="Home"
              url="/#"
              :active="isHomeActive()"
          />
          <nav-link
              title="About"
              :active="isAboutActive()"
              url="#about"
          />
          <nav-link
              title="portfolio"
              :active="isPortfolioActive()"
              url="#portfolio"
          />
          <nav-link
              title="Services"
              :active="isServiceActive()"
              url="#services"
          />
        </div>
      </div>
    </xl-container>

    <div class="px-2 pt-2 pb-3 | space-y-1" v-show="showCloseMenuIcon">
      <nav-link
          title="Home"
          url="/#"
          :active="isHomeActive()"
      />
      <nav-link
          title="About"
          :active="isAboutActive()"
          url="#about"
      />
      <nav-link
          title="portfolio"
          :active="isPortfolioActive()"
          url="#portfolio"
      />
      <nav-link
          title="Services"
          :active="isServiceActive()"
          url="#services"
      />
    </div>
  </nav>
</template>

<script setup>
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import SlideImageList from "@/components/lists/SlideImageList.vue";
import {useGlobalState} from "@/store.js";
import {useIntersectionObserver} from "@vueuse/core";

const portfolio =  ref([])
const portfolioSlides =  ref(null)
const state = useGlobalState()

onBeforeMount(() => {
  fetchSetting('portfolio.json')
      .then(response => portfolio.value = response)
})

useIntersectionObserver(portfolioSlides, ([{ isIntersecting }]) => {
  if (!isIntersecting) return

  state.menuActive.value = '#portfolio'
})
</script>

<template>
  <div class="max-w-7xl mx-auto mt-8 md:mt-14 | px-2 sm:px-6 lg:px-8 py-2 md:py-14">
    <h3 class="text-4xl text-blue font-medium">Portfolio</h3>
    <slide-image-list :slides="portfolio" />
  </div>
  <div id="portfolio" ref="portfolioSlides"></div>
</template>

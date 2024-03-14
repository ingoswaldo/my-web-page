<script setup>
import Underline from "@/components/texts/Underline.vue";
import GrayDarkXlText from "@/components/texts/GrayDarkXlText.vue";
import GrayDarkLgText from "@/components/texts/GrayDarkLgText.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import {getImageURL} from "@/helpers/images.js";
import {useIntersectionObserver} from "@vueuse/core";
import {useGlobalState} from "@/store.js";
import TextWithLeftRightAnimation from "@/components/texts/TextWithLeftRightAnimation.vue";
import TextWithTwisterAnimation from "@/components/texts/TextWithTwisterAnimation.vue";

const about = ref({})
const description2 = ref(null)
const state = useGlobalState()

onBeforeMount(() => {
  fetchSetting('about.json')
      .then(response => about.value = response)
})

useIntersectionObserver(description2, ([{ isIntersecting }]) => {
  if (!isIntersecting) return

  state.menuActive.value = '#about'
})
</script>

<template>
  <div class="block md:flex items-center w-full">
    <img :src="getImageURL('author.jpg')" class="me xl:w-1/2 | object-cover | xl:rounded-r-3xl" />

    <div class="md:absolute | w-full md:w-1/2 lg:w-1/2 xl:w-2/3 | right-0 | bg-gray-light | md:rounded-l-3xl | px-4 py-12 ">
      <h3 class="text-blue text-4xl font-extrabold">
        <text-with-twister-animation text="About Me" />
      </h3>
      <underline />

      <gray-dark-xl-text>
        <text-with-left-right-animation :text="about.name" />
      </gray-dark-xl-text>
      <gray-dark-xl-text>
        <text-with-left-right-animation :text="about.role" />
      </gray-dark-xl-text>
      <gray-dark-lg-text class="animate-reveal">{{ about.description1 }}</gray-dark-lg-text>
      <gray-dark-lg-text class="animate-reveal">{{ about.description2 }}</gray-dark-lg-text>
      <div ref="description2"></div>
    </div>
  </div>
</template>

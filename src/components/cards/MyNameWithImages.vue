<script setup>
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import {getImageURL} from "@/helpers/images.js";
import {useIntersectionObserver} from "@vueuse/core";
import {useGlobalState} from "@/store.js";
import TextWithTwisterAnimation from "@/components/texts/TextWithTwisterAnimation.vue";
import TextWithLeftRightAnimation from "@/components/texts/TextWithLeftRightAnimation.vue";

const presentation =  ref({})
const presentationName =  ref(null)
const state = useGlobalState()

onBeforeMount(() => {
  fetchSetting('presentation.json')
      .then(response => presentation.value = response)
})

useIntersectionObserver(presentationName, ([{ isIntersecting }]) => {
  if (!isIntersecting) return

  state.menuActive.value = '#home'
})
</script>

<template>
  <div class="max-w-7xl mx-auto my-16 md:my-32 | px-2 sm:px-6 lg:px-8">
    <div class="flex items-center">
      <div class="flex-1 | text-center sm:text-left">
        <h3 class="text-white text-2xl md:text-4xl font-extrabold | my-0 md:my-1">
          <text-with-twister-animation :text="presentation.greeting" />
        </h3>
        <h1 ref="presentationName" class="text-white text-4xl md:text-7xl font-extrabold | my-4 md:my-8">
          <text-with-left-right-animation :text="presentation.name" />
        </h1>
        <h3 class="text-white text-xl md:text-4xl font-bold | my-4 md:my-8">
          <text-with-twister-animation :text="presentation.role" />
        </h3>
        <a href="mailto:info@oswaldomontes.com" class="inline-flex items-center | px-4 py-2 | bg-white | text-blue | hover:opacity-70 | rounded-full | uppercase | focus:outline-none | animate-heart">
          Hire me!
        </a>
      </div>

      <div class="absolute | right-0 | top-72 sm:top-20 md:top-1/3 xl:top-1/4 2xl:top-24 | h-1/3 sm:h-1/2 xl:h-3/5 2xl:h-4/5">
        <img :src="getImageURL('computers.png')" class="object-cover h-full"/>
      </div>
    </div>
  </div>
</template>

<script setup>

import LogoIcon from "@/components/icons/LogoIcon.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import {getImageURL} from "@/helpers/images.js";
import GithubIcon from "@/components/icons/GithubIcon.vue";
import LinkedinIcon from "@/components/icons/LinkedinIcon.vue";
import XlContainer from "@/components/containers/XlContainer.vue";

const footer =  ref({})

onBeforeMount(() => {
  fetchSetting('footer.json')
      .then(response => footer.value = response)
})
</script>

<template>
  <div class="bg-gray-light mt-4 md:mt-40">
    <img src="/author.jpg" class="invisible md:visible absolute | h-1/4 lg:h-1/3 xl:h-2/5 | right-4 md:right-8 | -mt-2 md:-mt-12 | object-cover | rounded-2xl xl:rounded-3xl"/>
    <xl-container class="mt-0 md:mt-16 | px-2 py-2">
      <div class="flex h-48 xl:h-96 gap-10">
        <logo-icon class="w-80 h-48 | text-blue | my-2 self-center"/>
        <div class="self-center">
          <a target="_blank" class="flex flex-row gap-3 text-blue font-medium text-xl | my-2" :href="footer.linkedin">
            <linkedin-icon class="text-blue | w-8 h-8"/>
            <span class="hidden md:block">Oswaldo Montes</span>
          </a>
          <a target="_blank" class="flex flex-row gap-3 text-blue font-medium text-xl | my-2" :href="footer.github">
            <github-icon class="text-blue | w-8 h-8"/>
            <span class="hidden md:block">ingoswaldo</span>
          </a>
        </div>
      </div>
      <h3 class="flex place-content-center | text-blue font-extrabold">Copyright© {{ new Date().getFullYear()}}</h3>
    </xl-container>
  </div>
</template>

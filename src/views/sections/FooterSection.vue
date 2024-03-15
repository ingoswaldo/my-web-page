<script setup>

import LogoIcon from "@/components/icons/LogoIcon.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import EmailIcon from "@/components/icons/EmailIcon.vue";
import LocationIcon from "@/components/icons/LocationIcon.vue";
import {getImageURL} from "@/helpers/images.js";

const footer =  ref({})

onBeforeMount(() => {
  fetchSetting('footer.json')
      .then(response => footer.value = response)
})
</script>

<template>
  <div class="bg-gray-light mt-4 md:mt-40">
    <img :src="getImageURL('author.jpg')" class="invisible md:visible absolute | h-1/4 lg:h-1/3 xl:h-2/5 | right-4 md:right-8 | -mt-2 md:-mt-12 | object-cover | rounded-2xl xl:rounded-3xl"/>
    <div class="max-w-7xl mt-0 md:mt-16 | px-8 py-2 md:py-14">
      <div class="block 2xl:flex 2xl:justify-around items-center | h-60 lg:h-72 xl:h-80">
        <logo-icon class="w-80 | text-blue | my-2"/>
        <div class="block 2xl:flex 2xl:flex-col">
          <div class="flex | my-2">
            <location-icon class="text-blue | w-8 h-8"/>
            <h3 class="footer-text text-blue font-medium text-xl | mx-2 my-2">{{ footer.city }}</h3>
          </div>
          <div class="flex | my-2 mx-auto">
            <email-icon class="text-blue | w-8 h-8"/>
            <h3 class="footer-text text-blue font-medium text-xl | mx-2 my-2">{{ footer.email }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

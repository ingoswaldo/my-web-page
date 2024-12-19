<script setup>
import Underline from "@/components/texts/Underline.vue";
import GrayDarkXlText from "@/components/texts/GrayDarkXlText.vue";
import GrayDarkLgText from "@/components/texts/GrayDarkLgText.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import {getImageURL} from "@/helpers/images.js";

const about = ref({})

onBeforeMount(() => {
  fetchSetting('about.json')
      .then(response => about.value = response)
})
</script>

<template>
  <div class="block md:flex items-center w-full">
    <img src="/author.jpg" class="me xl:w-1/2 | object-cover | xl:rounded-r-3xl" />

    <div class="md:absolute | w-full md:w-1/2 lg:w-1/2 xl:w-2/3 | right-0 | bg-gray-light | md:rounded-l-3xl | px-4 py-12 ">
      <h3 class="text-blue text-4xl font-extrabold">About Me</h3>
      <underline />

      <gray-dark-xl-text>{{ about.name }}</gray-dark-xl-text>
      <gray-dark-xl-text>{{ about.role }}</gray-dark-xl-text>
      <gray-dark-lg-text>{{ about.description1 }}</gray-dark-lg-text>
      <gray-dark-lg-text>{{ about.description2 }}</gray-dark-lg-text>
    </div>
  </div>
</template>

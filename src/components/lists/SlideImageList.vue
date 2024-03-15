<script setup>

import {getImageURL} from "@/helpers/images.js";

defineProps({
  slides: Array
})
</script>

<template>
  <div class="overflow-auto w-full">
    <div class="flex | p-2 |">
      <div v-for="(slide, index) in slides" :key="index" class="flex-shrink-0 | w-1/3 2xl:w-5/12 | rounded-2xl | m-4">
        <img :src="getImageURL(slide.imageName)" :alt="slide.title" class="rounded-2xl | object-cover | h-48 md:h-80">
      </div>
    </div>
  </div>
</template>

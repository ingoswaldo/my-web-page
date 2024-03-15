<script setup>
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import SlideImageList from "@/components/lists/SlideImageList.vue";
import CardWithBlueBackground from "@/components/cards/CardWithBlueBackground.vue";

const portfolio =  ref([])

onBeforeMount(() => {
  fetchSetting('portfolio.json')
      .then(response => portfolio.value = response)
})
</script>

<template>
  <card-with-blue-background >
    <h3 class="text-4xl text-white font-medium">Portfolio</h3>
    <slide-image-list :slides="portfolio" />
  </card-with-blue-background>
</template>

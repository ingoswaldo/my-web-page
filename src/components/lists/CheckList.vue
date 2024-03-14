<script setup>

import TextWithCheck from "@/components/texts/TextWithCheck.vue";

defineProps({
  title: String,
  data: Array
})
</script>

<template>
  <ul class="flex-1 | my-8 | list-none | text-blue text-2xl">
    <h3 class="font-extrabold">{{ title }}</h3>
    <li v-for="(item, index) in data" :key="index" class="my-3">
      <text-with-check>{{ item }}</text-with-check>
    </li>
  </ul>
</template>

<style scoped>

</style>

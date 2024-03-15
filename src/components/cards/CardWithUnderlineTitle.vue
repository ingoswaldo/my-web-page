<script setup>

import Underline from "@/components/texts/Underline.vue";

defineProps({
  title: String
})
</script>

<template>
  <div class="w-full md:w-1/2 | md:flex-1 md:mx-8">
    <h3 class="education text-blue text-4xl font-extrabold">{{ title }}</h3>
    <underline />

    <slot />
  </div>
</template>

<style scoped>

</style>

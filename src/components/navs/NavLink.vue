<script setup>
defineProps({
  title: String,
  url: String,
  active: Boolean
})
</script>

<template>
  <div>
    <a :href="url" class="text-white text-base font-medium uppercase | px-0 py-2 | mx-2">
      {{ title }}
    </a>
    <hr class="border-b-2 border-white | rounded-md | my-1 | w-1/6 sm:w-full" v-if="active">
    <hr class="border-b-2 border-blue | rounded-md | my-1" v-else>
  </div>
</template>


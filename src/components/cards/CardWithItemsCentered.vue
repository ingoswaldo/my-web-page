<script setup>
defineProps({
  title: String,
  description: String
})
</script>

<template>
  <div class="flex items-center | my-4 md:my-14 | px-2">
    <slot name="icon" />
    <h4 class="flex-1 | text-lg text-white text-justify | mx-8">
      <span class="font-extrabold">{{ title }}</span> <br> {{ description }}
    </h4>
  </div>
</template>

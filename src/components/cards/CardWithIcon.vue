<script setup>
defineProps({
  title: String,
  subtitle: String
})
</script>

<template>
  <div class="my-2 | p-2 md:p-4 | bg-gray-light | rounded-3xl">
    <slot />

    <div class="text-center | my-8">
      <h1 class="text-6xl text-blue font-extrabold">{{ title }}</h1>
      <h1 class="text-3xl text-blue font-medium | my-2">{{ subtitle }}</h1>
    </div>
  </div>
</template>

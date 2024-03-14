<script setup>
defineProps({
  title: String
})
</script>

<template>
  <div class="bg-blue">
    <div class="max-w-7xl mx-auto mt-8 md:mt-14 | px-2 sm:px-6 lg:px-8 py-2 md:py-14">
      <h3 class="service text-4xl text-white font-medium" >{{ title }}</h3>
      <slot />
    </div>
  </div>
</template>

<style scoped>

</style>

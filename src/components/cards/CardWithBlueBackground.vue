<script setup>
import TextWithTwisterAnimation from "@/components/texts/TextWithTwisterAnimation.vue";
import XlContainer from "@/components/containers/XlContainer.vue";

defineProps({
  title: String
})
</script>

<template>
  <div class="bg-blue">
    <xl-container class="mt-8 md:mt-14 | px-2 sm:px-6 lg:px-8 py-2 md:py-14">
      <h3 class="service text-4xl text-white font-medium">
        <text-with-twister-animation :text="title" />
      </h3>
      <slot />
    </xl-container>
  </div>
</template>

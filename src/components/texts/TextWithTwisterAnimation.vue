<script setup>

defineProps({
  text: String,
  infinite: {
    type: Boolean,
    default: false
  }
})
</script>

<template>
  <span
      class="opacity-0 | translate-x-[150px] rotate-[-180deg] animate-twister"
      v-for="(letter, index) in text"
      :style="{ animationDelay: `${index * 0.05}s` }"
      :class="{ 'inline-block': letter !== ' '}"
      :key="index"
  >
    {{ letter }}
  </span>
</template>

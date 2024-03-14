<script setup>

defineProps({
  text: String,
})
</script>

<template>
  <p>
    <span
        class="opacity-0 | translate-x-[-150px] scale-50 | animate-left-right"
        v-for="(letter, index) in text"
        :style="{ animationDelay: `${index * 0.05}s` }"
        :class="{ 'inline-block': letter !== ' ' }"
    >
    {{ letter }}
  </span>
  </p>
</template>

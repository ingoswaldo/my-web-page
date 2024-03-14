<script setup>

import CheckIcon from "@/components/icons/CheckIcon.vue";
</script>

<template>
  <div class="flex items-center">
    <check-icon class="text-blue | w-8 h-8 | m-1" />
    <slot />
  </div>
</template>

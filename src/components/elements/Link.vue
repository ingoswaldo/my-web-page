<template>
  <a :href="url" class="inline-flex items-center | px-4 py-2 | hover:opacity-70 | rounded-2xl | uppercase | focus:outline-none">
    <slot name="text">{{ text }}</slot>
  </a>
</template>

<script>
export default {
  name: "Link",
  props: {
    text: {
      type: String,
      required: false,
      default: ''
    },
    url: {
      type: String,
      required: false,
      default: '#'
    },
  }
}
</script>

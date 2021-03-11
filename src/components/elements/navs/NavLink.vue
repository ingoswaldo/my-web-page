<template>
  <div>
    <a class="text-white text-base font-medium uppercase | px-0 py-2 | mx-2" :href="url">
      <slot name="title">{{ title }}</slot>
    </a>
    <hr class="border-b-2 border-white | rounded-md | my-1 | w-1/6 sm:w-full" v-if="active">
    <hr class="border-b-2 border-blue | rounded-md | my-1" v-else>
  </div>
</template>

<script>
export default {
  name: "NavLink",
  props: {
    title: {
      type: String,
      required: false,
      default: ''
    },
    url: {
      type: String,
      required: false,
      default: '#'
    },
    active: {
      type: Boolean,
      required: false,
      default: false
    }
  }
}
</script>

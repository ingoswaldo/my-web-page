<template>
  <button :type="type"
          v-bind:class="getColorClasses()"
          class="inline-flex items-center | px-4 py-2 | hover:opacity-70 | rounded-full | uppercase | focus:outline-none">
    <slot name="text">{{ text }}</slot>
  </button>
</template>

<script>
export default {
  name: "Button",
  props: {
    type: {
      type: String,
      required: false,
      default: 'button'
    },
    text: {
      type: String,
      required: false,
      default: ''
    },
    color: {
      type: String,
      required: false,
      default: 'primary'
    }
  },
  methods: {
    isPrimary() {
      return this.color.toLowerCase() === 'primary'
    },

    getColorClasses() {
      if (this.isPrimary()){
        return 'bg-white | text-blue';
      }

      return this.color
    }
  }
}
</script>

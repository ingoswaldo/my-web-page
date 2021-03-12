<template>
  <div class="my-2 | p-2 md:p-4 | bg-gray-light | rounded-3xl">
    <user class="rounded-lg | w-full | h-28 | text-blue" v-if="isIconUser()"/>
    <signal class="rounded-lg | w-full | h-28 | text-blue" v-if="isIconSignal()"/>
    <file-check class="rounded-lg | w-full | h-28 | text-blue" v-if="isIconFileCheck()"/>

    <div class="text-center | my-8">
      <h1 class="text-6xl text-blue font-extrabold">{{ title }}</h1>
      <h1 class="text-3xl text-blue font-medium | my-2">{{ subtitle }}</h1>
    </div>
  </div>
</template>

<script>
import User from "@/components/icons/User";
import Signal from "@/components/icons/Signal";
import FileCheck from "@/components/icons/FileCheck";
export default {
  name: "CardIcon",
  props: {
    icon: {
      type: String,
      default: 'user',
      required: false
    },
    title: {
      type: String,
      default: '',
      required: false
    },
    subtitle: {
      type: String,
      default: '',
      required: false
    }
  },
  components: {
    FileCheck,
    Signal,
    User
  },
  methods: {
    isIconUser() {
      return this.icon.toLowerCase() === 'user'
    },

    isIconSignal() {
      return this.icon.toLowerCase() === 'signal'
    },

    isIconFileCheck() {
      return this.icon.toLowerCase() === 'file-check'
    },
  }
}
</script>

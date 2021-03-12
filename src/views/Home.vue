<template>
  <div class="max-w-7xl mx-auto my-14 | px-2 sm:px-6 lg:px-8 | overflow-auto">
    <div class="flex flex-wrap justify-between">
      <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Happy Clients" />
      <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Years of Experience" icon="signal" />
      <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Projects Done" icon="file-check"/>
    </div>
  </div>
</template>

<script>

import CardIcon from "@/components/elements/cards/CardIcon";
export default {
  name: 'Home',
  components: {
    CardIcon
  },
}
</script>

<script setup>

import CardWithUnderlineTitle from "@/components/cards/CardWithUnderlineTitle.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import TimelineList from "@/components/lists/TimelineList.vue";

const experience = ref([])

onBeforeMount(() => {
  fetchSetting('jobs.json')
      .then(response => experience.value = response)
})
</script>

<template>
  <div class="flex max-w-7xl mx-auto my-8 md:my-14 | px-2 sm:px-6 lg:px-8">
    <card-with-underline-title title="Experience">
      <timeline-list :jobs="experience" />
    </card-with-underline-title>
  </div>
</template>

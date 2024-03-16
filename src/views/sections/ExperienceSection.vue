<script setup>

import CardWithUnderlineTitle from "@/components/cards/CardWithUnderlineTitle.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import TimelineList from "@/components/lists/TimelineList.vue";
import XlContainer from "@/components/containers/XlContainer.vue";

const experience = ref([])

onBeforeMount(() => {
  fetchSetting('jobs.json')
      .then(response => experience.value = response)
})
</script>

<template>
  <xl-container class="flex | my-8 md:my-14 | px-2 sm:px-6 lg:px-8">
    <card-with-underline-title title="Experience">
      <timeline-list :jobs="experience" />
    </card-with-underline-title>
  </xl-container>
</template>

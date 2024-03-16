<script setup>

import CardWithUnderlineTitle from "@/components/cards/CardWithUnderlineTitle.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import CheckList from "@/components/lists/CheckList.vue";
import XlContainer from "@/components/containers/XlContainer.vue";

const knowledge = ref({})

onBeforeMount(() => {
  fetchSetting('skills.json')
      .then(response => knowledge.value = response)
})
</script>

<template>
  <xl-container class="block md:flex | my-8 md:my-14 | px-2 sm:px-6 lg:px-8">
    <card-with-underline-title title="Education">
      <ul class="my-8 | px-4 | list-disc | text-blue text-2xl text-justify">
        <li v-for="(education, index) in knowledge.educations" :key="index" class="education font-extrabold">{{ education.title }}
          <p class="text-gray-dark font-medium | my-2">{{ education.description }}</p>
        </li>
      </ul>
    </card-with-underline-title>

    <card-with-underline-title title="Skills">
      <div class="flex flex-wrap">
        <check-list title="Frontend" :data="knowledge.skills?.frontend" />
        <check-list title="Backend" :data="knowledge.skills?.backend" />
        <check-list title="Soft Skills" :data="knowledge.skills?.expertises" />
      </div>
    </card-with-underline-title>
  </xl-container>
</template>

<script setup>

import FileCheckIcon from "@/components/icons/FileCheckIcon.vue";
import UserIcon from "@/components/icons/UserIcon.vue";
import SignalIcon from "@/components/icons/SignalIcon.vue";
import CardWithIcon from "@/components/cards/CardWithIcon.vue";

const getYearsOfExperience = ()=> {
  const yearsInMilliseconds = Math.abs(new Date('2016-01-01') - new Date())

  //0.75 = 9 month worked before 2016-01-01
  return Math.floor(yearsInMilliseconds / (1000 * 3600 * 24 * 365) + 0.75).toString()
}
</script>

<template>
  <div class="max-w-7xl mx-auto my-14 | px-2 sm:px-6 lg:px-8">
    <div class="flex flex-wrap justify-between">
      <card-with-icon class="welcome-icon w-full md:w-72 xl:w-80" title="15" subtitle="Happy Clients">
        <user-icon class="rounded-lg | w-full | h-28 | text-blue" />
      </card-with-icon>
      <card-with-icon class="welcome-icon w-full md:w-72 xl:w-80" v-bind:title="getYearsOfExperience()" subtitle="Years of Experience">
        <signal-icon class="rounded-lg | w-full | h-28 | text-blue" />
      </card-with-icon>
      <card-with-icon class="welcome-icon w-full md:w-72 xl:w-80" title="20" subtitle="Projects Done">
        <file-check-icon class="rounded-lg | w-full | h-28 | text-blue" />
      </card-with-icon>
    </div>
  </div>
</template>

<template>
  <div v-waypoint="{ active: true, callback: onWaypoint}">
    <div class="block md:flex items-center">
      <img src="@/assets/images/author.png" class="xl:w-1/2 | object-cover | xl:rounded-r-3xl" data-aos="zoom-in-right"
           data-aos-duration="2000"/>

      <div class="absolute | w-full md:w-1/2 lg:w-1/2 xl:w-2/3 | right-0 | bg-gray-light | md:rounded-l-3xl | pl-14 pr-14 xl:pr-32 py-12 "
           data-aos="zoom-in-right"
           data-aos-duration="2000">
        <h3 class="text-blue text-4xl font-extrabold">About Me</h3>
        <under-line />

        <p class="text-gray-dark text-xl md:text-4xl font-extrabold | my-2 ">{{ about.name }}</p>
        <p class="text-gray-dark text-xl md:text-4xl font-extrabold | my-2 ">{{ about.job }}</p>
        <p class="text-gray-dark text-lg md:text-xl font-medium text-justify | my-8 ">{{ about.description1 }}</p>
        <p class="text-gray-dark text-lg md:text-xl font-medium text-justify | my-8 ">{{ about.description2 }}</p>
      </div>
    </div>

    <div class="max-w-7xl mx-auto my-16 md:my-32 | px-2 sm:px-6 lg:px-8" data-aos="zoom-in-right"
         data-aos-duration="2000">
      <h3 class="text-blue text-4xl font-extrabold">Education</h3>
      <under-line />


    </div>
  </div>
</template>

<script>
import info from '@/assets/settings/about.json'
import UnderLine from "@/components/elements/UnderLine";
export default {
  name: "About",
  components: {UnderLine},
  data: () => {
    return {
      about: info
    }
  },
  methods: {
    onWaypoint ({ going}) {
      if (going === this.$waypointMap.GOING_IN) {
        this.$router.push('#about').catch(() => {})
      }
    }
  }
}
</script>

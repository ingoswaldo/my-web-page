<template>
  <div class="bg-blue">
    <div class="max-w-7xl mx-auto mt-8 md:mt-14 | px-2 sm:px-6 lg:px-8 py-2 md:py-14">
      <h3 class="text-4xl text-white font-medium" data-aos="zoom-in-right"
          data-aos-duration="2000">Services</h3>
      <div class="grid grid-cols-1 md:grid-cols-2" v-waypoint="{ active: true, callback: onWaypoint}">
        <div class="flex items-center | my-4 md:my-14 | px-2" v-for="(service, index) in services" :key="index"
             data-aos="zoom-in-right"
             data-aos-duration="2000">
          <computer-code class="text-white | h-32 w-32" v-if="isComputerCodeIcon(service.icon)"/>
          <mobile class="text-white | h-32 w-32" v-if="isMobileIcon(service.icon)"/>
          <clean-code class="text-white | h-32 w-32" v-if="isCleanCodeIcon(service.icon)"/>
          <user-interface class="text-white | h-32 w-32" v-if="isUserInterfaceIcon(service.icon)"/>
          <h4 class="flex-1 | text-xl text-white text-justify | mx-8">{{ service.description }}</h4>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ComputerCode from "@/components/icons/ComputerCode";
import UserInterface from "@/components/icons/UserInterface";
import Services from "@/assets/settings/services.json"
import Mobile from "@/components/icons/Mobile";
import CleanCode from "@/components/icons/CleanCode";

export default {
  name: "Services",
  components: {
    CleanCode,
    Mobile,
    UserInterface,
    ComputerCode
  },
  data: () => {
    return {
      services: Services
    }
  },
  methods: {
    isComputerCodeIcon(icon) {
      return icon === 'computer-code'
    },

    isUserInterfaceIcon(icon) {
      return icon === 'user-interface'
    },

    isCleanCodeIcon(icon) {
      return icon === 'clean-code'
    },

    isMobileIcon(icon) {
      return icon === 'mobile'
    },

    onWaypoint({going}) {
      if (going === this.$waypointMap.GOING_IN) {
        this.$router.push('#services').catch(() => {
        })
      }
    }
  }
}
</script>

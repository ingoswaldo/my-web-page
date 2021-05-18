<template>
  <Observer @on-change="onChange">
    <div class="bg-blue">
      <div class="max-w-7xl mx-auto mt-8 md:mt-14 | px-2 sm:px-6 lg:px-8 py-2 md:py-14">
        <h3 class="service text-4xl text-white font-medium" >Services</h3>
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="flex items-center | my-4 md:my-14 | px-2" v-for="(service, index) in services" :key="index">
            <computer-code class="service text-white | h-32 w-32" v-if="isComputerCodeIcon(service.icon)"/>
            <mobile class="service text-white | h-32 w-32" v-if="isMobileIcon(service.icon)"/>
            <clean-code class="service text-white | h-32 w-32" v-if="isCleanCodeIcon(service.icon)"/>
            <user-interface class="service text-white | h-32 w-32" v-if="isUserInterfaceIcon(service.icon)"/>
            <h4 class="service flex-1 | text-xl text-white text-justify | mx-8">{{ service.description }}</h4>
          </div>
        </div>
      </div>
    </div>
  </Observer>
</template>

<script>
import ComputerCode from "@/components/icons/ComputerCode";
import UserInterface from "@/components/icons/UserInterface";
import Services from "@/assets/settings/services.json"
import Mobile from "@/components/icons/Mobile";
import CleanCode from "@/components/icons/CleanCode";
import Observer from "vue-intersection-observer";
import anime from "animejs";

export default {
  name: "Services",
  components: {
    CleanCode,
    Mobile,
    UserInterface,
    ComputerCode,
    Observer
  },
  data() {
    return {
      services: Services,
      animation: null
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

    playAnimation() {
      this.animation.play()
    },

    onChange(entry) {
      if (entry.isIntersecting){
        this.playAnimation()
      }
    },
  },
  mounted() {
    this.animation = anime({
      targets: '.service',
      scale: [0, 1],
      opacity: [0, 1],
      easing: "easeOutExpo",
      duration: 1500,
      delay: anime.stagger(200),
      autoplay: false
    }, '-=500')
  }
}
</script>

<template>
  <div class="max-w-7xl mx-auto my-16 md:my-32 | px-2 sm:px-6 lg:px-8">
    <div class="flex items-center">
      <div class="flex-1 | text-center sm:text-left">
        <h3 class="welcome-text text-white text-2xl md:text-4xl font-extrabold | my-0 md:my-1">
          <text-animated :text="slider.hello" parent-class="welcome-text" />
        </h3>
        <h1 class="welcome-text text-white text-4xl md:text-7xl font-extrabold | my-4 md:my-8">
          <text-animated :text="slider.name" parent-class="welcome-text" />
        </h1>
        <h3 class="welcome-text | text-white text-xl md:text-4xl font-bold | my-4 md:my-8">
          <text-animated :text="slider.description" parent-class="welcome-text" />
        </h3>
        <a href="mailto:info@oswaldomontes.com" class="inline-flex items-center | px-4 py-2 | bg-white | text-blue | hover:opacity-70 | rounded-full | uppercase | focus:outline-none | hire-me">
          Hire me!
        </a>
      </div>

      <div class="absolute | right-0 | top-72 sm:top-20 md:top-1/3 xl:top-1/4 2xl:top-24 | h-1/3 sm:h-1/2 xl:h-3/5 2xl:h-4/5">
        <img src="@/assets/images/computers.png" class="object-cover h-full | slider-image"/>
      </div>
    </div>
  </div>
</template>

<script>

import anime from "animejs";
import slider from '@/assets/settings/welcome.json'
import TextAnimated from "@/components/elements/TextAnimated";

export default {
  name: "Welcome",
  components: {TextAnimated},
  data: () => {
    return {
      slider: slider
    }
  },
  methods: {
    animateHireMeButton() {
      anime.timeline({loop: true})
      .add({
        targets: '.hire-me',
        loop: true,
        scale: {
          value: [1, 1.5],
          duration: 1600,
          delay: 50,
          easing: 'easeInQuad'
        },
        delay: 50
      })
      .add({
        targets: '.hire-me',
        loop: true,
        scale: {
          value: [1.5, 1],
          duration: 1600,
          delay: 50,
          easing: 'easeOutQuad'
        },
        delay: 50
      })
    },

    animateSliderImages() {
      anime.timeline({loop: true})
        .add({
          targets: '.slider-image',
          loop: true,
          opacity: {
            value: [0, 1],
            duration: 3000,
            delay: 500,
            easing: 'easeInQuad'
          },
          delay: 250
        })
        .add({
          targets: '.slider-image',
          loop: true,
          opacity: {
            value: [1, 0],
            duration: 1500,
            delay: 450,
            easing: 'easeOutQuad'
          },
          delay: 250
        })
    },
  },
  mounted() {
    this.animateHireMeButton()
    this.animateSliderImages()
  }
}
</script>

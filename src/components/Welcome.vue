<template>
  <div class="max-w-7xl mx-auto my-16 md:my-32 | px-2 sm:px-6 lg:px-8" v-waypoint="{ active: true, callback: onWaypoint}">
    <div class="flex items-center">
      <div class="flex-1 | text-center sm:text-left">
        <h3 class="wrap-text text-white text-2xl md:text-4xl font-extrabold | my-0 md:my-1">
          <span v-bind:class="isBlankSpace(letter) ? '': 'letter inline-block'" v-for="(letter, index) in slider.hello" :key="index">{{ letter }}</span>
        </h3>
        <h1 class="wrap-text text-white text-4xl md:text-7xl font-extrabold | my-4 md:my-8">
          <span v-bind:class="isBlankSpace(letter) ? '': 'letter inline-block'" v-for="(letter, index) in slider.name" :key="index">{{ letter }}</span>
        </h1>
        <h3 class="wrap-text | text-white text-xl md:text-4xl font-bold | my-4 md:my-8">
          <span v-bind:class="isBlankSpace(letter) ? '': 'letter inline-block'" v-for="(letter, index) in slider.description" :key="index">{{ letter }}</span>
        </h3>
        <Button text="Hire me!" class="hire-me"/>
      </div>

      <div class="absolute | right-0 | top-72 sm:top-20 md:top-1/3 xl:top-1/4 2xl:top-24 | h-1/3 sm:h-1/2 xl:h-3/5 2xl:h-4/5">
        <img src="@/assets/images/computers.png" class="object-cover h-full | slider-image"/>
      </div>
    </div>
  </div>
</template>

<script>

import Button from "@/components/elements/Button";
import anime from "animejs";
import slider from '@/assets/settings/welcome.json'

export default {
  name: "Welcome",
  components: {
    Button
  },
  data: () => {
    return {
      slider: slider
    }
  },
  methods: {
    onWaypoint ({ going}) {
      if (going === this.$waypointMap.GOING_IN) {
        this.$router.push('/').catch(() => {})
      }
    },

    isBlankSpace(letter) {
      return letter === ' '
    },

    animateWrappedText() {
      anime.timeline({loop: true})
          .add({
            targets: '.wrap-text .letter',
            scale: [4, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70 * i
          })
          .add({
            targets: '.wrap-text',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
    },

    animateHireMeButton() {
      anime.timeline({loop: true})
      .add({
        targets: '.hire-me',
        loop: true,
        scale: {
          value: [1, 1.5],
          duration: 1600,
          delay: 500,
          easing: 'easeInQuad'
        },
        delay: 250
      })
      .add({
        targets: '.hire-me',
        loop: true,
        scale: {
          value: [1.5, 1],
          duration: 1600,
          delay: 500,
          easing: 'easeOutQuad'
        },
        delay: 250
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
            delay: 500,
            easing: 'easeOutQuad'
          },
          delay: 250
        })
    }
  },
  mounted() {
    this.animateWrappedText()
    this.animateHireMeButton()
    this.animateSliderImages()
  }
}
</script>

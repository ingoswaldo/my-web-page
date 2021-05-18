<template>
  <div v-bind:class="parentClass">
    <span v-bind:class="isBlankSpace(letter) ? '': 'letter inline-block'" v-for="(letter, index) in text" :key="index">{{
        letter
      }}</span>
  </div>
</template>

<script>
import anime from "animejs";

export default {
  name: "TextAnimated",
  props: {
    parentClass: {
      type: String,
      default: 'wrap-text'
    },
    text: {
      type: String,
      required: true
    },
    animation: {
      type: String,
      default: 'sunny'
    }
  },
  data() {
    return {
      parentAnimation: {
        targets: this.parentClass,
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      },
      typeAnimations: {
        sunny: {
          targets: `.${this.parentClass} .letter`,
          scale: [4, 1],
          opacity: [0, 1],
          translateZ: 0,
          easing: "easeOutExpo",
          duration: 950,
          delay: (el, i) => 70 * i
        },
        thursday: {
          targets: `.${this.parentClass} .letter`,
          scale: [0.3, 1],
          opacity: [0, 1],
          translateZ: 0,
          easing: "easeOutExpo",
          duration: 600,
          delay: (el, i) => 70 * (i + 1)
        },
        reality: {
          targets: `.${this.parentClass} .letter`,
          translateY: ["1.1em", 0],
          translateX: ["0.55em", 0],
          translateZ: 0,
          rotateZ: [180, 0],
          duration: 750,
          opacity: [0, 1],
          easing: "easeOutExpo",
          delay: (el, i) => 50 * i
        },
        out: {
          targets: `.${this.parentClass} .letter`,
          scale: [14, 1],
          opacity: [0, 1],
          easing: "easeOutCirc",
          duration: 800,
          delay: (el, i) => 800 * i
        },
        rain: {
          targets: `.${this.parentClass} .letter`,
          opacity: [0, 1],
          translateX: [-25, 0],
          translateY: [-50, 0],
          rotate: ['-45deg', 0],
          delay: anime.stagger(100),
        }
      }
    }
  },
  methods: {
    isBlankSpace(letter) {
      return letter === ' '
    },

    animateWrappedText() {
      let timeline = anime.timeline({loop: true})

      try {
        timeline.add(this.typeAnimations[this.animation], '-=500')
      } catch {
        timeline.add(this.typeAnimations.sunny)
      }

      timeline.add(this.parentAnimation);
    },
  },
  mounted() {
    this.animateWrappedText()
  }
}
</script>

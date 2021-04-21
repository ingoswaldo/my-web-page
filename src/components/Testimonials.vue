<template>
  <div class="max-w-7xl mx-auto mt-8 md:mt-14 | px-2 sm:px-6 lg:px-8 py-2 md:py-14">
    <h3 class="text-4xl text-blue font-medium" data-aos="zoom-in-right"
        data-aos-duration="2000">Testimonials</h3>
    <div class="flex justify-center p-2 md:p-4" data-aos="zoom-in-right"
         data-aos-duration="2000">
      <div v-for="(testimonial, index) in testimonials" :key="index" class="w-full md:w-1/3 | p-4 md:p-8 | transition duration-500 ease-in-out"
           @mouseenter="mouseEnterOnTestimonial(index)"
           @mouseleave="mouseLeaveTestimonial()"
           v-bind:class="{ 'opacity-50': getTestimonialActive() !== (index + 1), hidden: isNotOnShowSetting(index + 1)}">
        <img :src="testimonial.imageUrl" v-if="hasImageUrl(testimonial.imageUrl)"
             class="mx-auto | rounded-full"
             v-bind:class="getTestimonialActive() === (index + 1) ? 'h-48 w-48' : 'h-40 w-40'" />
        <div class="mx-auto | bg-blue | rounded-full"
             v-else
             v-bind:class="getTestimonialActive() === (index + 1) ? 'h-48 w-48' : 'h-40 w-40'"></div>
        <div class="pt-6 text-center space-y-4">
          <div class="text-blue">
            <p class="font-extrabold" v-bind:class="getTestimonialActive() === (index + 1) ? 'text-2xl' : 'text-xl'">
              {{ testimonial.name }}
            </p>
            <p class="text-gray-dark font-semibold"
               v-bind:class="getTestimonialActive() === (index + 1) ? 'text-lg' : 'text-md'">{{
                testimonial.organization
              }}</p>
          </div>
          <blockquote>
            <p class="text-gray-dark font-semibold"
               v-bind:class="getTestimonialActive() === (index + 1) ? 'text-xl' : 'text-lg'">“ {{
                testimonial.comments
              }}”</p>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="flex justify-center | pt-6">
      <button class="mx-1 | w-4 h-4 | rounded-full | focus-within:outline-none"
              v-for="(testimonial, index) in testimonials"
              :key="index"
              v-bind:class="getTestimonialActive() === (index + 1) ? 'bg-blue' : 'border-2 border-blue'"
              @click="setTestimonialSettingActive(index + 1)"></button>
    </div>
  </div>
</template>

<script>
import Testimonials from "@/assets/settings/testimonials.json"

export default {
  name: "Testimonials",
  data: () => {
    return {
      testimonials: Testimonials,
      testimonialSetting: {
        isAnimationPaused: false,
        timeForNextTestimonialActive: 10000, //10 seconds
        active: 1,
        visible: {
          sm: 1,
          default: 3
        },
        show: []
      }
    }
  },
  methods: {
    isOnMobile() {
      return screen.width < 768
    },

    isNotOnShowSetting(key) {
      return this.testimonialSetting.show.findIndex(value => value === key) === -1
    },

    hasImageUrl(imageUrl) {
      return imageUrl !== '' && imageUrl !== undefined
    },

    getTestimonialActive() {
      return this.testimonialSetting.active
    },

    getQuantityTestimonialVisible() {
      if (this.isOnMobile()) {
        return this.testimonialSetting.visible.sm
      }

      return this.testimonialSetting.visible.default
    },

    setRightTestimonialToShowSetting(number) {
      this.testimonialSetting.show = []

      if (number > this.getQuantityTestimonialVisible()){
        this.addTestimonialToShowSetting(number)

        for (let i = 1; i < this.getQuantityTestimonialVisible(); i++) {
          this.addTestimonialToShowSetting(number - i)
        }

        return
      }

      if (number <= this.getQuantityTestimonialVisible()){
        this.addTestimonialToShowSetting(number)

        for (let i = 1; i < this.getQuantityTestimonialVisible(); i++) {
          this.addTestimonialToShowSetting(number + i)
        }

        return
      }
    },

    setTestimonialSettingActive(number) {
      if (this.isNotOnShowSetting(number)) {
        this.setRightTestimonialToShowSetting(number)
        this.addTestimonialToShowSetting(number)
      }

      this.testimonialSetting.active = number
    },

    addTestimonialToShowSetting(value) {
      this.testimonialSetting.show.push(value)
    },

    addVisibleTestimonials() {
      for (let i = 1; i <= this.getQuantityTestimonialVisible(); i++) {
        this.addTestimonialToShowSetting(i)
      }
    },

    changeTestimonialEvery30Seconds() {
      setInterval( () => {
        if (this.testimonialSetting.isAnimationPaused){
          return
        }

        let testimonialActive = this.getTestimonialActive();
        let nextTestimonialActive = testimonialActive + 1

        if (testimonialActive === this.testimonials.length){
          nextTestimonialActive = 1
        }

        this.setTestimonialSettingActive(nextTestimonialActive)
      }, this.testimonialSetting.timeForNextTestimonialActive)
    },

    mouseEnterOnTestimonial(index) {
      this.setTestimonialSettingActive(index + 1)
      this.testimonialSetting.isAnimationPaused = true
    },

    mouseLeaveTestimonial() {
      this.testimonialSetting.isAnimationPaused = false
    }
  },

  mounted() {
    this.addVisibleTestimonials()
    this.changeTestimonialEvery30Seconds()
  }
}
</script>

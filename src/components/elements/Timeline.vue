<template>
  <Observer @on-change="onChange">
    <div class="flex max-w-7xl mx-auto my-8 md:my-14 | px-2 sm:px-6 lg:px-8">
        <div class="w-full md:w-1/2 | md:flex-1 md:mx-8">
          <h3 class="timeline text-blue text-4xl font-extrabold">Experience</h3>
          <under-line class="timeline"/>

          <div class="container">
            <div class="flex flex-col md:grid grid-cols-9 mx-auto p-2 text-white">
              <div class="flex md:contents" v-for="(job, index) in jobs" :key="index" v-bind:class="isEven(index)? '' : 'flex-row-reverse'">
                <div class="timeline col-start-5 col-end-6 mr-10 md:mx-auto relative" v-if="isEven(index)" >
                  <div class="h-full w-6 flex items-center justify-center">
                    <div class="h-full w-1 bg-blue pointer-events-none" v-bind:class="getRightRoundedClass(jobs, index)"></div>
                  </div>
                  <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue shadow"></div>
                </div>

                <div class="timeline bg-blue col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md" v-else v-bind:class="isMobile() ? 'job-right' : 'job-left'">
                  <h3 class="font-extrabold text-2xl mb-1">{{ joinOrganizationAndYearsOfJob(job) }}</h3>
                  <p class="font-extrabold text-xl mb-1">{{ job.title }}</p>
                  <p class="font-medium text-justify">{{ job.description }}</p>
                </div>

                <div class="timeline bg-blue col-start-6 col-end-10 p-4 rounded-2xl my-4 mr-auto shadow-md job-right" v-if="isEven(index)">
                  <h3 class="font-extrabold text-2xl mb-1">{{ joinOrganizationAndYearsOfJob(job) }}</h3>
                  <p class="font-extrabold text-xl mb-1">{{ job.title }}</p>
                  <p class="font-medium text-justify">{{ job.description }}</p>
                </div>

                <div class="timeline col-start-5 col-end-6 md:mx-auto relative mr-10" v-else>
                  <div class="h-full w-6 flex items-center justify-center">
                    <div class="h-full w-1 bg-blue pointer-events-none"></div>
                  </div>
                  <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue shadow"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </Observer>
</template>

<script>
import UnderLine from "@/components/elements/UnderLine";
import Observer from "vue-intersection-observer";
import {jobs} from "@/assets/settings/about.json"
import anime from "animejs";

export default {
  name: "Timeline",
  components: {
    UnderLine,
    Observer
  },
  data() {
    return {
      jobs: jobs,
      animation: null
    }
  },
  methods: {
    isMobile() {
      return screen.width < 767
    },
    isEven(number) {
      return number % 2 === 0
    },

    isFirst(index) {
      return index === 0
    },

    isLast(array, index) {
      return array.length  === (index + 1)
    },

    getRightRoundedClass(array, index) {
      if (this.isFirst(index)){
        return 'rounded-t'
      }

      if (this.isLast(array, index)){
        return 'rounded-b'
      }
    },

    joinOrganizationAndYearsOfJob(job) {
      return `${job.organization} | ${job.start_year} - ${job.end_year}`
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
      targets: '.timeline',
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

<style scoped>
.job-right, .job-left {
  position: relative;
  background: #4c6cab;
}

.job-right:before, .job-left:before {
  content: "";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(194, 225, 245, 0);
  border-width: 0.8em;
}

.job-right:before {
  right: 100%;
  top: 40%;
  border-right-color: #4c6cab;
}

.job-left:before {
  left: 100%;
  top: 40%;
  border-left-color: #4c6cab;
}
</style>

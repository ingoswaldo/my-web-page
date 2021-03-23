<template>
  <div class="flex max-w-7xl mx-auto my-8 md:my-14 | px-2 sm:px-6 lg:px-8">
    <div class="w-full md:w-1/2 | md:flex-1 md:mx-8">
      <h3 class="text-blue text-4xl font-extrabold">Experience</h3>
      <under-line/>

      <div class="container">
        <div class="flex flex-col md:grid grid-cols-9 mx-auto p-2 text-white">
          <!-- right -->
          <div class="flex md:contents" v-for="(job, index) in jobs" :key="index" v-bind:class="isEven(index)? 'flex-row-reverse' : ''">
            <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative" v-if="isEven(index)">
              <div class="h-full w-6 flex items-center justify-center">
                <div class="h-full w-1 bg-blue pointer-events-none rounded-t"></div>
              </div>
              <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue shadow"></div>
            </div>

            <div class="bg-blue col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md job-left" v-else>
              <h3 class="font-semibold text-lg mb-1">{{ job.title }}</h3>
              <p class="leading-tight text-justify">{{ job.description }}</p>
            </div>

            <div class="bg-blue col-start-6 col-end-10 p-4 rounded-2xl my-4 mr-auto shadow-md job-right" v-if="isEven(index)">
              <h3 class="font-semibold text-lg mb-1">{{ job.title }}</h3>
              <p class="leading-tight text-justify">{{ job.description }}</p>
            </div>

            <div class="col-start-5 col-end-6 md:mx-auto relative mr-10" v-else>
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
</template>

<script>
import UnderLine from "@/components/elements/UnderLine";
import {jobs} from "@/assets/settings/about.json"

export default {
  name: "Timeline",
  components: {
    UnderLine
  },
  data: () => {
    return {
      jobs: jobs
    }
  },
  methods: {
    isEven(number) {
      return number % 2 === 0
    },
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

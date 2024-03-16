<script setup>
import {onMounted, ref} from "vue";

defineProps({
  jobs: Array
})

const showAnimation = ref(true)

onMounted(() => {
  setInterval(() => showAnimation.value = !showAnimation.value, 1300)
})

const isMobile = () => {
  return screen.width < 767
}

const isEven = number => {
  return number % 2 === 0
}

const isFirst = index => {
  return index === 0
}

const isLast = (array, index) => {
  return array.length  === (index + 1)
}

const joinOrganizationAndYearsOfJob = job => {
  return `${job.organization} | ${job.start_year} - ${job.end_year}`
}
</script>

<template>
  <div class="container">
    <div class="flex flex-col md:grid grid-cols-9 mx-auto p-2 text-white">
      <div class="flex md:contents" v-for="(job, index) in jobs" :key="index"
           :class="{ 'flex-row-reverse': !isEven(index) }">
        <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative" v-if="isEven(index)" >
          <div class="h-full w-6 flex items-center justify-center">
            <div class="h-full w-1 bg-blue pointer-events-none"
                 :class="{ 'rounded-t': isFirst(index), '': isLast(jobs, index) }"></div>
          </div>
          <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue shadow"></div>
        </div>

        <div class="bg-blue col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md"
             v-else
             :class="{'job-right': isMobile(), 'job-left': !isMobile() }">
          <h3 class="font-extrabold text-2xl mb-1">{{ joinOrganizationAndYearsOfJob(job) }}</h3>
          <p class="font-extrabold text-xl mb-1">{{ job.title }}</p>
          <p class="font-medium text-justify">{{ job.description }}</p>
        </div>

        <div class="bg-blue col-start-6 col-end-10 p-4 rounded-2xl my-4 mr-auto shadow-md job-right" v-if="isEven(index)">
          <h3 class="font-extrabold text-2xl mb-1">{{ joinOrganizationAndYearsOfJob(job) }}</h3>
          <p class="font-extrabold text-xl mb-1">{{ job.title }}</p>
          <p class="font-medium text-justify">{{ job.description }}</p>
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
</template>

<template>
  <div>
    <Observer @on-change="onChangeImage">
      <div id="me" class="block md:flex items-center w-full">
        <img src="@/assets/images/author.png" class="me xl:w-1/2 | object-cover | xl:rounded-r-3xl" />

        <div
            class="md:absolute | w-full md:w-1/2 lg:w-1/2 xl:w-2/3 | right-0 | bg-gray-light | md:rounded-l-3xl | px-4 py-12 ">
          <h3 class="me text-blue text-4xl font-extrabold">About Me</h3>
          <under-line class="me"/>

          <p class="me text-gray-dark text-xl md:text-xl xl:text-4xl font-extrabold | my-2 ">{{ about.name }}</p>
          <p class="me text-gray-dark text-xl md:text-xl xl:text-4xl font-extrabold | my-2 ">{{ about.job }}</p>
          <p class="me text-gray-dark text-lg md:text-md xl:text-xl font-medium text-justify | my-8 ">{{ changeYearsInDescription(about.description1) }}</p>
          <p class="me text-gray-dark text-lg md:text-md xl:text-xl font-medium text-justify | my-8 ">{{ about.description2 }}</p>
        </div>
      </div>
    </Observer>

    <Observer @on-change="onChangeEducation">
      <div class="block md:flex | max-w-7xl mx-auto my-8 md:my-14 | px-2 sm:px-6 lg:px-8">
        <div class="w-full md:w-1/2 | md:flex-1 md:mx-8">
          <h3 class="education text-blue text-4xl font-extrabold">Education</h3>
          <under-line class="education"/>

          <ul class="my-8 | px-4 | list-disc | text-blue text-2xl text-justify">
            <li v-for="(education, index) in about.education" :key="index" class="education font-extrabold">{{ education.title }}
              <p class="text-gray-dark font-medium | my-2">{{ education.description }}</p>
            </li>
          </ul>
        </div>

        <div class="w-full md:w-1/2 | md:flex-1 md:mx-8">
          <h3 class="education text-blue text-4xl font-extrabold">Skills</h3>
          <under-line class="education"/>

          <div class="flex flex-wrap">
            <ul class="flex-1 | my-8 | list-none | text-blue text-2xl">
              <h3 class="education font-extrabold">Frontend</h3>
              <li v-for="(skillFrontend, index) in about.skills.frontend" :key="index" class="education my-3">
                <div class="flex items-center">
                  <check class="text-blue | w-8 h-8 | m-1" />
                  {{ skillFrontend.title }}
                </div>
              </li>
            </ul>

            <ul class="flex-1 | my-8 | list-none | text-blue text-2xl">
              <h3 class="education font-extrabold">Backend</h3>
              <li v-for="(skillBackend, index) in about.skills.backend" :key="index" class="education my-3">
                <div class="flex items-center">
                  <check class="text-blue | w-8 h-8 | m-1" />
                  {{ skillBackend.title }}
                </div>
              </li>
            </ul>

            <ul class="flex-1 | my-8 | list-none | text-blue text-2xl">
              <h3 class="education font-extrabold">Expertises</h3>
              <li v-for="(skillExpertises, index) in about.skills.expertises" :key="index" class="education my-3">
                <div class="flex items-center">
                  <check class="text-blue | w-8 h-8 | m-1" />
                  {{ skillExpertises.title }}
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </Observer>

    <timeline/>
  </div>
</template>

<script>
import info from '@/assets/settings/about.json'
import UnderLine from "@/components/elements/UnderLine";
import Timeline from "@/components/elements/Timeline";
import Check from "@/components/icons/Check";
import Observer from "vue-intersection-observer"
import anime from "animejs";

export default {
  name: "About",
  components: {Check, Timeline, UnderLine, Observer},
  data: () => {
    return {
      about: info,
      yearsOfExperience: 5,
      animations: {
        image: null,
        education: null,
      }
    }
  },
  methods: {
    getYearsOfExperience(){
      let yearsInMilliseconds = Math.abs(new Date('2016-01-01') - new Date())

      return Math.floor(yearsInMilliseconds / (1000 * 3600 * 24 * 365) + 0.75) //0.75 = 9 month worked before 2016-01-01
    },

    changeYearsInDescription(description) {
      return description.toString().replace(':years', `+${this.yearsOfExperience}`)
    },

    getAppearAnimation(target) {
      return anime({
        targets: target,
        scale: [0, 1],
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 1500,
        delay: anime.stagger(200),
        autoplay: false
      }, '-=500')
    },

    initAnimations() {
      this.animations.image = this.getAppearAnimation('.me')
      this.animations.education = this.getAppearAnimation('.education')
    },

    playAnimation(animation) {
      this.animations[animation].play()
    },

    onChangeImage(entry) {
      if (entry.isIntersecting){
        this.playAnimation('image')
      }
    },

    onChangeEducation(entry) {
      if (entry.isIntersecting){
        this.playAnimation('education')
      }
    },
  },
  mounted() {
    this.yearsOfExperience = this.getYearsOfExperience()
    this.initAnimations()
  }
}
</script>

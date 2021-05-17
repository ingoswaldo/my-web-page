<template>
  <div>
    <Observer @on-change="onChangeHome">
      <div class="max-w-7xl mx-auto my-14 | px-2 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-between">
          <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Happy Clients" />
          <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Years of Experience" icon="signal"/>
          <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Projects Done" icon="file-check"/>
        </div>
      </div>
    </Observer>

    <Observer @on-change="onChangeAbout">
      <about id="about"/>
    </Observer>

    <Observer @on-change="onChangeServices">
      <services id="services" />
    </Observer>

    <Observer @on-change="onChangeComments">
      <comments id="testimonials" />
    </Observer>

    <Observer @on-change="onChangePortfolio">
      <portfolio id="portfolio" />
    </Observer>
  </div>
</template>

<script>

import CardIcon from "@/components/elements/cards/CardIcon";
import About from "@/components/About";
import Services from "@/components/Services";
import Comments from "@/components/Testimonials";
import Portfolio from "@/components/Portfolio";
import Observer from 'vue-intersection-observer'

export default {
  name: 'Home',
  components: {
    Portfolio,
    Comments,
    Services,
    About,
    CardIcon,
    Observer
  },
  methods: {
    onChangeHome(entry) {
      if (entry.isIntersecting){
        this.setMenuActive('#home')
      }
    },

    onChangeAbout(entry) {
      if (entry.isIntersecting){
        this.setMenuActive('#about')
      }
    },

    onChangeServices(entry) {
      if (entry.isIntersecting){
        this.setMenuActive('#services')
      }
    },

    onChangeComments(entry) {
      if (entry.isIntersecting){
        this.setMenuActive('#testimonials')
      }
    },

    onChangePortfolio(entry) {
      if (entry.isIntersecting){
        this.setMenuActive('#portfolio')
      }
    },

    setMenuActive(menu) {
      this.$store.commit('setMenuActive', menu)
    }
  }
}
</script>

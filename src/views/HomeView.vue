<script setup>
import StatSection from "@/views/sections/StatSection.vue";
import PresentationSection from "@/views/sections/PresentationSection.vue";
import AboutMeSection from "@/views/sections/AboutMeSection.vue";
import KnowledgeSection from "@/views/sections/knowledgeSection.vue";
import ExperienceSection from "@/views/sections/ExperienceSection.vue";
import ServicesSection from "@/views/sections/ServicesSection.vue";
import FooterSection from "@/views/sections/FooterSection.vue";
import PortfolioSection from "@/views/sections/PortfolioSection.vue";
import {onBeforeMount, ref} from "vue";
import {useGlobalState} from "@/store.js";
import {useIntersectionObserver} from "@vueuse/core";

const homeElement =  ref(null)
const aboutElement =  ref(null)
const portfolioElement =  ref(null)
const serviceElement =  ref(null)
const state = useGlobalState()

onBeforeMount(() => {
  handleIntersectionObserver(homeElement, '#home')
  handleIntersectionObserver(serviceElement, '#services')
  handleIntersectionObserver(portfolioElement, '#portfolio')
  handleIntersectionObserver(aboutElement, '#about')
})

const handleIntersectionObserver = (elementRef, menuActiveValue) => {
  useIntersectionObserver(elementRef, ([{ isIntersecting }]) => {
    if (!isIntersecting) return

    state.menuActive.value = menuActiveValue
  });
}
</script>

<template>
  <presentation-section ref="homeElement" />
  <stat-section />
  <about-me-section ref="aboutElement" id="about" />
  <knowledge-section />
  <portfolio-section ref="portfolioElement" id="portfolio" />
  <experience-section />
  <services-section ref="serviceElement" id="services" />
  <footer-section />
</template>

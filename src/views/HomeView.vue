<script setup>
import StatSection from "@/views/sections/StatSection.vue";
import PresentationSection from "@/views/sections/PresentationSection.vue";
import AboutMeSection from "@/views/sections/AboutMeSection.vue";
import KnowledgeSection from "@/views/sections/knowledgeSection.vue";
import ExperienceSection from "@/views/sections/ExperienceSection.vue";
import ServicesSection from "@/views/sections/ServicesSection.vue";
import FooterSection from "@/views/sections/FooterSection.vue";
import PortfolioSection from "@/views/sections/PortfolioSection.vue";
</script>

<template>
  <presentation-section />
  <stat-section />
  <about-me-section id="about" />
  <knowledge-section />
  <experience-section />
  <services-section id="services" />
  <portfolio-section id="portfolio" />
  <footer-section />
</template>

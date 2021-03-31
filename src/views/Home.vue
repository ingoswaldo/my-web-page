<template>
  <div>
    <div class="max-w-7xl mx-auto my-14 | px-2 sm:px-6 lg:px-8">
      <div class="flex flex-wrap justify-between">
        <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Happy Clients" data-aos="zoom-in-right"
                   data-aos-duration="2000"/>
        <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Years of Experience" icon="signal"
                   data-aos="zoom-in-right"
                   data-aos-duration="2000"/>
        <card-icon class="w-full md:w-72 xl:w-80" title="6" subtitle="Projects Done" icon="file-check"
                   data-aos="zoom-in-right"
                   data-aos-duration="2000"/>
      </div>
    </div>

    <about id="about"/>
    <services id="services" />
  </div>
</template>

<script>

import CardIcon from "@/components/elements/cards/CardIcon";
import About from "@/components/About";
import Services from "@/components/Services";

export default {
  name: 'Home',
  components: {
    Services,
    About,
    CardIcon
  },
}
</script>

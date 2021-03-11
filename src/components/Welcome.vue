<template>
  <div class="max-w-7xl mx-auto my-4 xl:my-14 | px-2 sm:px-6 lg:px-8">
    <div class="flex items-center">
      <div class="flex-1 | text-center sm:text-left">
        <h3 class="text-white text-2xl md:text-4xl font-extrabold | my-0 md:my-1">Hi!</h3>
        <h1 class="text-white text-4xl md:text-7xl font-extrabold | my-4 md:my-8">I'm Oswaldo Montes</h1>
        <h3 class="text-white text-xl md:text-4xl font-bold | my-4 md:my-8">Senior Web Developer</h3>
        <Button text="Hire me!" class="invisible md:visible"/>
      </div>

      <div class="absolute | right-0 | top-56 sm:top-20 md:top-1/3 xl:top-1/4 2xl:top-24 | h-1/3 sm:h-1/2 xl:h-3/5 2xl:h-4/5">
        <img src="@/assets/images/computers.png" class="object-cover h-full"/>
      </div>
    </div>
  </div>
</template>

<script>

import Button from "@/components/elements/Button";

export default {
  name: "Welcome",
  components: {
    Button
  },
}
</script>

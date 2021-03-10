<template>
  <div id="app" class="font-sans antialiased">
    <div class="bg-white | min-h-screen">
      <div class="bg-blue | rounded-bl-4xl md:rounded-bl-4xl xl:rounded-bl-6xl | h-3/4-screen">
        <nav-bar/>
        <welcome/>
      </div>

      <router-view/>
    </div>
  </div>
</template>

<script>
import NavBar from "@/components/elements/Navs/NavBar";
import Welcome from "@/components/Welcome";

export default {
  name: 'App',
  components: {
    Welcome,
    NavBar
  },
  metaInfo: {
    title: 'Oswaldo Montes',
    titleTemplate: '%s | Senior Web Developer'
  }
}
</script>

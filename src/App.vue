<template>
  <div id="app" class="font-sans antialiased">
    <div class="bg-white | min-h-screen">
      <div class="bg-blue | rounded-bl-4xl md:rounded-bl-4xl xl:rounded-bl-6xl | h-4/5-screen">
        <nav-bar/>
        <welcome/>
      </div>

      <router-view/>
    </div>
  </div>
</template>

<script>
import NavBar from "@/components/elements/navs/NavBar";
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

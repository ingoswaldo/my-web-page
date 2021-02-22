<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </div>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App',
  metaInfo: {
    title: 'Oswaldo Montes',
    titleTemplate: '%s | Senior Web Developer'
  }
}
</script>

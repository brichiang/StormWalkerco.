<template>
  <div class="home">
    <div id="container">
      <h1>STYLE START HERE</h1>
      <router-link to="/check_in">Check In</router-link>
      <router-link to ="/user">Signup</router-link>
    </div>
    <HelloWorld></HelloWorld>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home',
  components: {
    HelloWorld
  }
}
</script>

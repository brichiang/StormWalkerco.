<template>
  <div id="account">
    <div class="header">
      <div class="header-title">YOUR APPOINTMENT</div>
    </div>
    <div class="container">
      <accountUser />
      <accountBarber />
    </div>
  </div>
</template>

<script>
import accountBarber from '@/components/MyAccount-Barber.vue'
import accountUser from '@/components/MyAccount-User.vue'
  
export default {
  name:"app",
  components: {
    accountBarber,
    accountUser
  }
}
</script>
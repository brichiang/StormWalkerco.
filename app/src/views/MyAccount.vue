<template>
  <div id="account">
    <div class="header">
      <div class="header-title">YOUR APPOINTMENT</div>
    </div>
    <div class="container">
      <accountUser v-if="account == true"/>
      <accountBarber v-if="account == false"/>
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
  },
  data(){
    return {
      account:false,
    }
  },
  beforeMount(){
      if(localStorage.isUser === "yes"){
        this.account = true;
      } else {
        this.account = false;
      }
  },
  methods:{
  }
}
</script>
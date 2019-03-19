<template>
  <div class="home">
    <div id="home-box1">
      <div class="container">
        <div id="box">
          <div class="title">STYLE STARTS <strong>HERE.</strong></div>
        </div>
        <div id="button-box">
          <button class="button" @click="checkIn">CHECK IN</button>
          <button class="button" @click="signUp">SIGN UP</button>
        </div>
      </div>
    </div>
    <div id="home-box2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div id="image-box">
              <img src="@/assets/imgs/barbershop2.jpg" width="100%;">
            </div>
          </div>
          <div class="col-md-6">
            <div id="home-text-box">
              <div id="home-text-box2">
                <h1>WHO ARE WE?</h1>
                <p>Located in the heart of Vancouver, StormWalker Co. is a place where every man can call his own. We provide the finest hair and grooming services for all. StormWalker assures that every gentleman that comes through, gets the highest attention to details from our experienced barbers.  We also offer a shampoo service using the best organic products available on the market.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home',
  components: {
    HelloWorld
  },
  data(){
    return {
      barberLog:false,
    }
  },
  methods: {
    checkIn: function(){
      if(sessionStorage.getItem("isLogin") === "yes"){
        this.$router.push('/check_in');
        //window.location.href = "/check_in";
      } else {
        this.$router.push('/Login');
        alert("Please Login");
      }
    },
    signUp: function(){
      this.$router.push('/user');
    }
  }
}
</script>

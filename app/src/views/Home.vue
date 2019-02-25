<template>
  <div class="home">
    <div id="home-box1">
      <div class="container">
        <div id="box">
          <div class="title">STYLE STARTS <strong>HERE.</strong></div>
        </div>
        <div id="button-box">
          <router-link to="/check_in" class="button">Check In</router-link>
          <router-link to="/user" class="button">Signup</router-link>
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
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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
  }
}
</script>

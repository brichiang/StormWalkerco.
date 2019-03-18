<template>
  <div id="app">
    <page-header />
    <!-- <header>
      <div id="container">
        <div class="item-box">
          <div id="logo">
            <router-link to="/">
              <img src="@/assets/imgs/Logo/StormWalkerLogo_Black.png" width="350px;">
            </router-link>
          </div>
        </div>
        <div class="item-box">
          <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><router-link to="/">Home</router-link></li>
                  <li><router-link to ="/barber">Barber</router-link></li>
                  <li><router-link to="/Services">Services</router-link></li>
                  <li><router-link to="/Contact">Contact</router-link></li>
                </ul>
              </div>
            </div>
          </nav>
          <div id="nav">
            <router-link to="/">Home</router-link>
            <router-link to ="/barber">Barber</router-link>
            <router-link to="/Services">Services</router-link>
            <router-link to="/Contact">Contact</router-link>
          </div>
        </div>
      </div>
    </header> -->
    <router-view/>
    <pageFooter />
  </div>
</template>

<script>
import pageFooter from '@/components/Footer.vue'
import pageHeader from '@/components/Header.vue'
  
export default {
  name:"app",
  components: {
    pageFooter,
    pageHeader
  }
}
</script>

<style>
  @import url("https://fonts.googleapis.com/css?family=Montserrat");
  @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css");
  #app {
    font-family: 'Montserrat', sans-serif;
/*
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
*/
    color: #000000;
    text-transform: uppercase;
  }
  h1 h2 h3 h4 h5 h6 {
    letter-spacing: 2px;
  }
  #navi {
    padding: 10px 0 20px 0;
    font-size: 0.9em;
    letter-spacing: 1px;
    /* text-align: right; */
  }
  #navi a {
    color: #fff;
  }

  #navir a.router-link-exact-active {
    color: #fff;
  }
/* Form Style */
  .col-md-6 {
    padding-left: 0%;
    padding-right: 0%;
  }
  .title-box {
    background-image: url(assets/imgs/barbershop.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    justify-content: center;
    display: flex;
  }
  .title-box2 {
    margin-top: auto;
    margin-bottom: auto;
    width: 70%;
  }
  .title {
    font-size: 4em;
    color: #ffffff;
    letter-spacing: 10px;
  }
  .form-box {
    background-color:lightgray;
    padding:10% 15% 10% 15%;
    height:100%;
    justify-content: center;
    display: flex;
  }
  .form-box2{
    background-color:#ffffff;
    width: 100%;
    padding: 5%;
  }
  .form-title {
    font-size: 2em;
    margin-bottom: 7%;
    border-bottom: 2px solid #000000;
    letter-spacing: 2px;
  }
  .form-group {
    margin-bottom: 5%;
  }
  label {
    font-size: 1.3em;
    letter-spacing: 2px;
  }
  .form-input {
    width: 100%;
    height: 40px;
    border: none;
    border-bottom: 2px solid #000000;
  }
  .select-box {
    width: 100%;
    background-color: #fff;
    border-style: none;
  }
  .buttom-box {
    text-align: center;
  }
  .form-buttom {
    width: 180px;
    font-size: 1.3em;
    letter-spacing: 2px;
    color: #ffffff;
    background-color: #000000;
    padding: 2% 0 2% 0;
  }
/* End Form Style */
/* Appointment Style */
  .appoint-box {
    background-image: url(assets/imgs/barbershop.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    padding:10% 15% 10% 15%;
    height:100%;
    justify-content: center;
    display: flex;
  }
  .appoint-box2 {
    background-color:#ffffff;
    width: 100%;
    padding: 5%;
  }
  .appoint-title {
    font-size: 2em;
    margin-bottom: 7%;
    border-bottom: 2px solid #000000;
    letter-spacing: 2px;
  }
  table {
    width: 100%;
  }
  th {
    font-size: 1.3em;
    letter-spacing: 2px;
  }
  td {
    font-size: 0.9em;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
/* End Appointment Style */
/* Home Style */
  #home-box1 {
    background-image: url(assets/imgs/barbershop.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    justify-content: center;
    display: flex;
    padding: 10% 0 10% 0;
  }
  #box{
    width: 40%;
  }
  .button {
    width: 150px;
    margin: 40px 40px 20px 0;
    padding: 10px 20px 10px 20px;
    font-size: 1.0em;
    background-color: #ffffff;
    color: #000;
    float: left;
    text-align: center;
    letter-spacing: 2px;
  }
  #home-box2 {
    justify-content: center;
    display: flex;
    padding: 20% 0 20% 0;
  }
  #image-box {
    padding: 20px;
  }
  #home-text-box {
    padding: 20px;
    justify-content: center;
    display: flex;
    height: 100%;
  }
  #home-text-box2 {
    margin-top: auto;
    margin-bottom: auto;
  }
  .header {
    width: 100%;
    text-align: center;
    background-image: url(assets/imgs/barbershop.jpg);
    background-size: cover;
    padding: 15% 0 15% 0;
    margin-bottom: 5%;
  }
  .header-title {
    color: #fff;
    font-size: 4em;
    font-weight:bolder;
    letter-spacing: 10px;
  }
/* End Home Style */
/* Barber Style */
  .profile {
    margin-bottom: 10%;
  }
  .barberImg {
    margin-bottom: 10px;
  }
/*End Barber Style*/
/*Contact Style */
  #contact {
    margin-bottom: 5%;
  }
  .column {
    float: left;
    width: 50%;
  }
  .contact-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #000;
    margin: 2px;
  }
  #contact-but {
    background-color: #d3b46c;
    color: #fff;
    border: none;
    font-size: 1.5em;
    padding: 2px 30px 2px 30px;
  }
/*End Contact Style*/
/*Services Style*/
  .service-box {
    margin-bottom: 10%;
  }
  .info-box {
    background-color: #d3b46c;
    color: #fff;
    padding: 5% 5% 2% 10%;
    height: 100%;
    justify-content: center;
  }
  li {
    margin-top: 4%;
  }
/*End Services Style*/
/*Account Style*/
  .account-header {
    font-weight:bolder;
    text-align: center;
    margin-bottom: 50px;
  }
  .account {
    margin-bottom: 50px;
  }
  .schedule {
    padding: 0 10% 0 10%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .schedule-frame {
    width: 90%;
    margin-left: 5%;
    margin-right: 5%;
    margin-bottom: 20px;
  }
  .schedule-box {
    border: 4px solid #f3f3f3;
    width: 100%;
    margin-bottom: 20px;
  }
  .schedule-but {
    margin-right: 10px;
    padding: 5px 20px 5px 20px;
    background-color: #d3b46c;
    color: #fff;
    font-size: 1.0em;
    letter-spacing: 2px;
  }
  .profile-pic {
    border-radius: 150px;
    height: 150px;
    float: left;
    margin: 20px;
  }
  .information {
    margin: 20px;
    height: 150px;
  }
  .logout-but {
    width: 100%;
    text-align: center;
  }
/*End Account Style*/
/* Modal */
  .modal-form {
    position: fixed;
    z-index: 3;
    width: 400px;
    margin: auto;
    top: 5%;
    bottom: 0;
    right: 0;
    left: 0;
  }
  .modal-body {
    background-color: rgba(0,0,0,0.5);
  }
  .modal-box {
    background-color: #fff;
    padding: 20px;
  }
  .modal-title {
    font-size: 2em;
    border-bottom: 2px solid #000000;
    letter-spacing: 2px;
    margin-bottom: 10px;
  }
  .modal-group {
    margin-bottom: 5px;
  }
  .modal-input {
    width: 100%;
    border: none;
    border-bottom: 2px solid #000000;
  }
  .modal-button {
    background-color: #000;
    color: #fff;
    padding: 5px 20px 5px 20px;
    letter-spacing: 2px;
    margin: 0 10px 0 10px;
  }
  .confirm-box {
    position: fixed;
    z-index: 3;
    background-color: rgba(0,0,0,0.5);
    width: 100vw;
    height: 100vh;
    margin: auto;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
  }
  .confirm-box2 {
    background-color: #fff;
    padding: 20px;
    width: 400px;
    height: 190px;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
  }
/* End Modal */
</style>

<template>
  <div id="app">
    <header>
      <div id="container">
        <div id="logo">
          <router-link to="/">
            Storm Walker co.
          </router-link>
        </div>
        <div id="nav">
          <router-link to="/">Home</router-link> |
          <router-link to ="/barber">Barber</router-link>
        </div>
      </div>
    </header>
    <router-view/>
  </div>
</template>

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
  }
/* Header Style */
  header {
    background-color: #ffffff;
  }
  #container {
    width: 100%;
    display: inline-block;
  }
  #logo {
    color: #000000;
    padding: 30px;
  }

  #nav {
    padding: 30px;
    text-align: right;
  }

  #nav a {
    font-weight: bold;
    color: #2c3e50;
  }

  #nav a.router-link-exact-active {
    color: #42b983;
  }
/* End Header Style */
/* Form Style */
  .col-md-6 {
    padding-left: 0%;
    padding-right: 0%;
  }
  .title-box {
    background-color:dimgray;
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
    font-size: 5em;
    color: #ffffff;
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
    font-size: 3em;
    margin-bottom: 7%;
    border-bottom: 2px solid #000000;
  }
  .form-group {
    margin-bottom: 5%;
  }
  label {
    font-size: 1.8em;
  }
  .form-input {
    width: 100%;
    border: none;
    border-bottom: 2px solid #000000;
  }
  input[type="text"] {
    font-size: 1.5em;
  }
  .buttom-box {
    text-align: center;
  }
  .form-buttom {
    width: 200px;
    font-size: 1.8em;
    color: #ffffff;
    background-color: #000000;
    padding: 2% 0 2% 0;
  }
/* End Form Style */
/* Home Style */
  #home-box1 {
    background-color: rgba(0,0,0,.5);
    background-size: cover;
    justify-content: center;
    display: flex;
  }
  #box{
    width: 50%;
    padding: 10% 0 30% 0;
  }
  .button {
    width: 200px;
    margin: 40px 60px 20px 0;
    padding: 10px 20px 10px 20px;
    font-size: 1.2em;
    background-color: #ffffff;
    color: #000;
    float: left;
    text-align: center;
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
/* End Home Style */
</style>

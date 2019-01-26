<template>
  <div id="app">
    <header>
      <div id="container">
        <div id="logo">
          Storm Walker co.
        </div>
        <div id="nav">
          <router-link to="/">Home</router-link> ||
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
  .row {
    height:100vh;
  }
  .col-md-6 {
    padding-left: 0%;
    padding-right: 0%;
  }
  .title-box {
    background-color:dimgray;
    height: 100%;
    text-align: center;
    justify-content: center;
    display: flex;
  }
  .title-box2 {
    margin-top: auto;
    margin-bottom: auto;
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
</style>

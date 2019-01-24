<template>
  <div id="app">
    <header>
      <div id="container">
        <div id="logo">
          Storm Walker co.
        </div>
        <div id="nav">
          <router-link to="/">Home</router-link> |
          <router-link to="/about">About</router-link> |
          <router-link to ="/barber">Barber</router-link>
        </div>
      </div>
    </header>
    <router-view/>
  </div>
</template>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #2c3e50;
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
  .container {
    width: 100vw;
    height: 100vh;
  }
  .left-container {
    background-color: gray;
    width: 50%;
    height: 100%;
    color: #FFFFFF;
    float: left;
    height: 100%;
  }
  h1 {
    border-bottom: 2px solid gray;
  }
  .right-container {
    background-color: lightgray;
    width: 50%;
    height: 100%;
    float: right;
  }
  .form {
    background-color: #FFFFFF;
    margin: 20% 20% 20% 20%;
  }
  .inputBox {
    text-align: left;
    width: 100%;
  }
  .inp {
    border: none;
    border-bottom: 2px solid gray;
    width: 100%;
  }
  th {
    font-size: 1.5em;
  }
/* End Form Style*/
</style>

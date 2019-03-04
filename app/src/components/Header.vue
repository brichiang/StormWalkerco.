<template>
  <mdb-container id="header">
    <mdb-container id="container">
      <!--Navbar-->
      <mdb-navbar class="mt-2" animated animation="1">
        <!-- Navbar brand -->
        <mdb-navbar-brand id="logo">
          <a href="/">
            <img src="@/assets/imgs/Logo/StormWalkerLogo_Black.png" width="250px;">
          </a>
        </mdb-navbar-brand>
        <mdb-navbar-toggler>
          <mdb-navbar-nav right id="nav">
            <mdb-nav-item href="/" waves-fixed>HOME</mdb-nav-item>
            <mdb-nav-item href="/barber" waves-fixed>BARBER</mdb-nav-item>
            <mdb-nav-item href="/Services" waves-fixed>SERVICES</mdb-nav-item>
            <mdb-nav-item href="/Contact" waves-fixed>CONTACT</mdb-nav-item>
            <mdb-nav-item href="/Login" waves-fixed>LOGIN</mdb-nav-item>
            <mdb-nav-item href="/myaccount" waves-fixed>My Account</mdb-nav-item>
          </mdb-navbar-nav>
        </mdb-navbar-toggler>
      </mdb-navbar>
      <!--/.Navbar-->
    </mdb-container>
  </mdb-container>
</template>

<script>
import { mdbNavbar, mdbNavItem, mdbNavbarNav, mdbNavbarToggler, mdbContainer, mdbRow, mdbInput, mdbNavbarBrand, mdbIcon } from 'mdbvue';

export default {
  name: 'HamburgerMenuPage',
  components: {
    mdbNavbar,
    mdbNavItem,
    mdbNavbarNav,
    mdbNavbarToggler,
    mdbContainer,
    mdbRow,
    mdbInput,
    mdbNavbarBrand,
    mdbIcon
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
  #header {
    background-color: #ffffff;
    justify-content: center;
    display: flex;
    height: 10%;
    width: 100%;
  }
  .item-box {
    height: 10%;
  }
  #container {
    width: 100%;
  }
  #logo {
    color: #000000;
    padding: 10px 0 10px 0;
    /* float: left; */
  }

  #nav {
    padding: 10px 0 20px 0;
    font-size: 0.9em;
    letter-spacing: 1px;
    /* text-align: right; */
  }

  #nav a {
    font-weight: bold;
    color: #2c3e50;
  }

  #nav a.router-link-exact-active {
    color: #42b983;
  }
</style>
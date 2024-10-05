<script setup>
import Signin from "./components/Signin.vue";
import Signup from "./components/Signup.vue";
</script>

<template>
  <header>
    <img src="../src/assets/logo.svg" alt="logo" />
    <div class="topnav">
      <a class="active" href="#Menu">Menu</a>
      <input type="text" placeholder="Search..." />
    </div>
  </header>
  <main>
    <Signup />
    <!-- <Signin /> -->
  </main>
</template>

<style>
@import url("https://fonts.cdnfonts.com/css/berlin-sans-fb-demi");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
:root {
  --black: rgb(12, 11, 0);
  --white: rgb(252, 247, 247);
  --blue: rgb(18, 139, 181);
  --yellow: rgb(222, 181, 34);
  --grey: rgb(163, 158, 158);
}
body {
  background-color: var(--black);
  font-family: "Berlin Sans FB Demi", sans-serif;
  color: var(--white);
  text-align: center;
}
header {
  background-color: var(--black);
  color: white;
  margin-bottom: 30px;
  text-align: center;
  display: flex;
}
header img{
  width: 80px;
  height: 80px;
}
</style>

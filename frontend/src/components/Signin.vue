<script setup></script>

<template>
  <header>
    <img src="../assets/logo.svg" alt="logo" />
    <div class="topnav">
      <a class="active" href="#Menu">Menu</a>
      <input type="text" placeholder="Search.." />
    </div>
  </header>
  <main>
    <div class="form-container">
      <form id="signup" class="sign-in-form">
        <h2 class="title">Sign in</h2>
        <div class="input-field">
          <div>
            <label for="email">Email</label>
          </div>
          <input type="email" required v-model="email" />
        </div>
        <div class="input-field">
          <div>
            <label for="password">Password</label>
          </div>
          <input type="password" required v-model="password" />
        </div>
        <!-- <input type="submit" class="btn" value="Sign in" /> -->
        <p>---------- or ----------</p>
        <input type="submit" class="btn" value="Create a new account" />
      </form>
    </div>
  </main>
  <footer></footer>
</template>

<style scoped>
header {
  display: flex;
}

form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0rem 5rem;
  gap: 0.7rem;
  transition: all 0.2s 0.7s;
  overflow: hidden;
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}
.sign-in-form {
  border: #333 solid 3px;
  max-width: 500px;
}
.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70vh;
}
label {
  color: var(--white);
  font-size: 1.2rem;
}

.input-field {
  max-width: 380px;
  width: 100%;
  background-color: var(--grey);
  margin: 10px;
  height: 45px;
  border-radius: 5px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}

.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: var(--white);
}
.btn {
  width: fit-content;
  background-color: var(--blue);
  border: none;
  outline: none;
  height: 49px;
  border-radius: 15px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  padding: 0 2rem;
  cursor: pointer;
  transition: 0.5s;
}

.btn:hover {
  background-color: #4d84e2;
}
</style>

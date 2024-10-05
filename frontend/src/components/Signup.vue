<script setup>
import { ref } from "vue";
import axios from "axios";
const email = ref("");
const username = ref("");
const password = ref("");
const repassword = ref("");
const error = ref("");
</script>

<template>
  <main>
    <div class="form-container">
      <form @submit.prevent="login" id="signup" class="sign-in-form">
        <h2 class="title">Create your account</h2>
        {{ error }}
        <label for="email">Email address</label>
        <div class="input-field">
          <input type="email" required v-model="email" />
        </div>
        <label for="username">Username</label>
        <div class="input-field">
          <input type="text" required v-model="username" />
        </div>
        <label for="password">Password</label>
        <div class="input-field">
          <input type="password" required v-model="password" />
        </div>
        <label for="repassword">Re-enter password</label>
        <div class="input-field">
          <input type="password" required v-model="repassword" />
        </div>
        <!-- profilkép feltöltés -->
        <p>Upload your profile picteure:<br>(optional)</p>
        <div class="profilepic">
            <div class="img-holder">
                <img src="" id="img" alt="profile picture" />
            </div>
            <div>
                <p>Upload picture</p>
                <input type="file" id="profilepic" name="profilepic" accept="image/*">
            </div>
        </div>
        <input type="submit" class="btn" value="Create account" />
      </form>
    </div>
    <p>Already have an account? <a>sign in</a></p>
  </main>
</template>

<style scoped>
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
  min-width: 700px;
}
.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh;
}
label {
  color: var(--white);
  font-size: 1.2rem;
  position: relative;
  top: 1.4rem;
}

.input-field {
  max-width: 380px;
  width: 100%;
  background-color: var(--grey);
  margin: 10px 10px 0px 10px;
  height: 45px;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
}

.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: var(--white);
  height: 100%;
  padding: 0.7rem;
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

.profilepic {
  display: flex;
  align-items: center;
  gap: 1rem;
  width: 100%;
  margin-top: 1rem;
}

.img-holder {
  width: 100px;
  height: 100px;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: var(--black);
  border: solid 1px var(--grey);
}

.img-holder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

p {
  color: var(--white);
  font-size: 1.2rem;
}

.title {
  color: var(--white);
  font-size: 2rem;
  margin-bottom: 1rem;
}


</style>

<script setup lang="ts">
import HeaderComponent from 'src/components/HeaderComponent.vue';
import FooterComponent from 'src/components/FooterComponent.vue';
</script>

<template>
  <q-layout
    view="lHh lpr lFf"
    container
    class="background-image"
  >
    <header class="text-white">
      <HeaderComponent />
    </header>

    <q-page-container>
      <q-page>
        <router-view />
      </q-page>
    </q-page-container>

    <footer class="bg-black text-white">
      <FooterComponent />
    </footer>
  </q-layout>
</template>

<style scoped>
.background-image {
  /*add a black background with opacity over the image*/
  background: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.7)),
    url('../assets/syuhe.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  justify-content: center;
  align-items: center;
  /* fit image to screen */
  min-height: 100vh;
}
</style>

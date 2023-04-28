<script setup>
import { computed } from 'vue'
const mobile = computed(() => window.innerWidth < 600)
</script>
<template>
  <div v-if="mobile" style="min-height: 20vh;" class="text-center">
        <div class="row justify-center">
        <q-img
          src="../assets/logo2.png"
          style="height: 75px; width: 75px"
          :style="{ transform: 'scale(2)' }"
        />
        </div>
        <div class="row flex justify-evenly">
          <div class="col-5">
              <div class="row">Acceuil</div>
              <div class="row">Nos services</div>
              <div class="row">Faire carrière</div>
              
          </div>
          <div class="col-5">
              <div class="row flex justify-end">Contactez-nous</div>
              <div class="row flex justify-end">Qui sommes-nous ?</div>
              <div class="row flex justify-end">Programme de formation</div>
          </div>
        </div>
  </div>
  <div v-else class="q-pa-md text-center text-weight-light">
    <div class="row" style="height: 180px;">
        <div class="col self-center">
        <q-img
          src="../assets/logo2.png"
          style="height: 75px; width: 75px"
          :style="{ transform: 'scale(2)' }"
        />
      </div>
        <div class="col column justify-around">
            <div>Acceuil</div>
            <div>Nos services</div>
            <!-- <div>
                <q-btn
                    color="white"
                    text-color="black"
                    label="Se connecter"
                    class="q-px-xl"
                />
            </div> -->
            <div></div>
        </div>
        <div class="col column justify-around">
            <div>Programme de formation découverte</div>
            <div>Faire carrière</div>
            <div></div>
        </div>
        <div class="col col column justify-around">
            <div>Contactez-nous</div>
            <div>Qui sommes-nous ?</div>
            <div>
                <q-icon name="facebook" size="2rem" />
            </div>
        </div>
    </div>
  </div>
</template>

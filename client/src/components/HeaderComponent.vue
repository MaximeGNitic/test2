<script setup>
import { computed } from 'vue'
const mobile = computed(() => window.innerWidth < 600)
</script>

<template>
    <div v-if="mobile" class="q-pa-md text-center text-h5" style="height: 12vh;">
    <div class="row">
      <div class="col flex flex-start">
        <q-btn icon="menu" style="font-size: 1.25em">
        <q-menu
          transition-show="scale"
          transition-hide="scale"
        >
          <q-list style="min-width: 100px">
            <q-item clickable>
              <q-item-section>Nos services</q-item-section>
            </q-item>
            <q-item clickable>
              <q-item-section>Carrière</q-item-section>
            </q-item>
            <q-separator />
            <q-item clickable>
              <q-item-section>Qui sommes-nous ?</q-item-section>
            </q-item>
            <q-item clickable>
              <q-item-section>Nous joindre</q-item-section>
            </q-item>
          </q-list>
        </q-menu>
      </q-btn>
      </div>
      <div class="col flex justify-end">
        <q-img
          src="../assets/logo2.png"
          style="height: 100px; width: 100px"
          :style="{ transform: 'scale(2)' }"
        />
      </div>
    </div>
  </div>

  <div v-else class="q-pa-md text-center text-h5" style="height: 20vh;">
    <div class="row">
      <div class="col self-center">Nos services</div>
      <div class="col self-center">Carrière</div>
      <div class="col">
        <q-img
          src="../assets/logo2.png"
          style="height: 100px; width: 100px"
          :style="{ transform: 'scale(2)' }"
        />
      </div>
      <div class="col self-center">Qui sommes-nous ?</div>
      <div class="col self-center">Nous joindre</div>
    </div>
  </div>  
</template>

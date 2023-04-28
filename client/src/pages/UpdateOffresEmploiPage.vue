<script setup>
import {onMounted} from 'vue';
    import {useOffreStore} from 'stores/offresEmploi';
    import { ref } from 'vue'

    const offreStore = useOffreStore();

    onMounted(async () => {

           await offreStore.getOffreEmploi(); 
           //console.log(offreStore.listEmploi);
           
});


const experience = ref();
    const datePublication = ref(null);
    const debutMandat = ref(null);
    const horaire = ref(null);
    const langue = ref(null);
    const infoSup = ref(null);

    //Login
    function ajoutOffresEmploiForm() {
        offreStore.addOffreEmploi(experience.value, datePublication.value, debutMandat.value, horaire.value, langue.value, infoSup.value);
        //console.log(experience.value);
    }


</script>

<template>
  <div>
    <h4 class="text-blue-grey-2 text-center">Modifier un offre d'emploi</h4>
    <form @submit="ajoutOffresEmploiForm">
        <q-input class="bg-blue-grey-2" label="Experience(Annee)" v-model="experience" @input="1"/>
        <q-date class="bg-blue-grey-2" v-model="datePublication"/>
        <q-date class="bg-blue-grey-2" v-model="debutMandat"/>
        <q-input class="bg-blue-grey-2" label="Horaire" v-model="horaire"/>
        <q-input class="bg-blue-grey-2" label="Langue" v-model="langue"/>
        <q-input class="bg-blue-grey-2" label="Info Supplementaire" v-model="infoSup"/>

        <q-btn class="bg-blue-grey-2" label="Submit" type="submit"/>
    </form>
  </div>
</template>
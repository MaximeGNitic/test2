<script setup>
  import {onMounted} from 'vue';
  import {useOffreStore} from '../stores/offresEmploi';

  const offreStore = useOffreStore();
  
  onMounted(async () => {
    await offreStore.getOffresEmploi(); 
  });
</script>

<template>
  <div>
    <h4 class="text-blue-grey-2 text-center">Offres d'emploi disponible</h4>
    <q-markup-table>
      <thead>
        <tr>
          <th class="text-center">Id</th>
          <th class="text-center">Experience(Annee)</th>
          <th class="text-center">Date publication</th>
          <th class="text-center">Debut mandat</th>
          <th class="text-center">Horaire</th>
          <th class="text-center">Langue</th>
          <th class="text-center">Info supplementaire</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="offre in offreStore.listEmploi" :key="offre.id">
          <td class="text-center">{{offre.id}}</td>
          <td class="text-center">{{offre.offre_nombreAnnee}}</td>
          <td class="text-center">{{offre.offre_datePublication}}</td>
          <td class="text-center">{{offre.offre_debutMandat}}</td>
          <td class="text-center">{{offre.offre_horaire}}</td>
          <td class="text-center">{{offre.offre_langue}}</td>
          <td class="text-center">{{offre.offre_infoSup}}</td>
          <td class="text-center"><router-link to="/offresemploi/ajout">Add</router-link></td>
          <td class="text-center"><router-link to="/offresemploi/modif">Update</router-link></td>
        </tr>
      </tbody>
    </q-markup-table>
  </div>
</template>
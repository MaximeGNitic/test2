import { defineStore } from 'pinia';
import axios from 'axios';
import type {OffresEmploiInterface} from 'src/interface/OffresEmploi.interface';
import { fetchOffresEmploi, fetchOffreEmploi } from 'src/service/OffreEmploi.service';

const url = 'http://localhost:8000/api/';

interface OffresEmploi{
    listEmploi: OffresEmploiInterface | null | undefined;
}

export const useOffreStore = defineStore('offre', {
    state: (): OffresEmploi => ({
        listEmploi: undefined,
    }),
    getters: {

    },
    actions: {
        //Fonction
        async getOffresEmploi(){
            try { 
                this.listEmploi = await fetchOffresEmploi();
            }catch(error: any){
                this.listEmploi = undefined;
                console.log(error);
            }
        },
        
        async addOffreEmploi(experience: string, datePublication: string, debutMandat: string, horaire: string, langue: string, infoSup: string){
            try {                
                const formData = new FormData();
                formData.append('offre_nombreAnnee', experience);
                formData.append('offre_datePublication', datePublication);
                formData.append('offre_debutMandat', debutMandat);
                formData.append('offre_horaire', horaire);
                formData.append('offre_langue', langue);
                formData.append('offre_infoSup', infoSup);


                await axios.post(url + 'addOffreEmploi', formData).then((response) => {
                    console.log(response);                  
                });
            }catch(error){
                console.log(error);
            }
        },

        async getOffreEmploi(){
            try { 
                this.listEmploi = await fetchOffreEmploi();
            }catch(error: any){
                this.listEmploi = undefined;
                console.log(error);
            }
        }
    }
});


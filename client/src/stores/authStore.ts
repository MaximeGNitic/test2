import { defineStore } from 'pinia';
import axios from 'axios';

const url = 'http://localhost:8000/api/';


export const useAuthStore = defineStore('offre', {
    state: () => ({

    }),
    getters: {

    },
    actions: {
        //Fonction
        async addUser(nom: string, email: string, password: string){
            try { 
                console.log(nom);
                const formData = new FormData();
                formData.append('role', '1');
                formData.append('nom', nom);
                formData.append('email', email);
                formData.append('password', password);
                formData.append('fiche', '1');

                await axios.post(url + 'addUser', formData).then((response) => {
                    console.log(response);                  
                });
            }catch(error){
                console.log(error);
            }
        },

        async getUser(email: string, password: string){
            try {                
                const formData = new FormData();
                formData.append('email', email);
                formData.append('password', password);

                await axios.post(url + 'getUser', formData).then((response) => {
                    console.log(response);                  
                });
            }catch(error){
                console.log(error);
            }
        }
    }
});
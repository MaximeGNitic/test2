<script setup lang="ts">
    import {useAuthStore} from 'stores/authStore';
    import { ref } from 'vue'

    const authStore = useAuthStore();

    const email = ref(null);
    const password = ref(null);
    
    //Login
    function loginForm() {
        authStore.getUser(email.value, password.value);
        return 1;
    }
</script>

<template>
    <div>
        <h4 class="text-blue-grey-2 text-center">Login</h4>
        <form @submit="loginForm">
            <q-input class="bg-blue-grey-2" label="Email" v-model="email"/>
            <q-input class="bg-blue-grey-2" label="Mot de passe" v-model="password"/>

            <q-btn class="bg-blue-grey-2" label="Submit" type="submit"/>
        </form>
    </div>
</template>
import { RouteRecordRaw } from 'vue-router';
import MainLayout from 'layouts/MainLayout.vue';
import HomePage from 'src/pages/HomePage.vue';

import LoginPage from 'src/pages/LoginPage.vue';
import RegisterPage from 'src/pages/RegisterPage.vue';
import OffresEmploiPage from 'src/pages/OffresEmploiPage.vue';
import FormOffresEmploiPage from 'src/pages/FormOffresEmploiPage.vue';
import UpdateOffresEmploiPage from 'src/pages/UpdateOffresEmploiPage.vue';

const routes: RouteRecordRaw[] = [
  {
    path: '/',
    component: MainLayout,
    children: [{ path: '', component: HomePage }],
  },
  // {
  //   path: '/services',
  //   component: MainLayout,
  //   children: [{ path: '', component: () => import('pages/Services.vue') }],
  // },

  // {
  //   path: '/carrière',
  //   component: MainLayout,
  //   children: [{ path: '', component: () => import('pages/Carriere.vue') }],
  // },

  // {
  //   path: '/minopro',
  //   component: MainLayout,
  //   children: [{ path: '', component: () => import('pages/Miropro.vue') }],
  // },

  // {
  //   path: '/contact',
  //   component: MainLayout,
  //   children: [{ path: '', component: () => import('pages/Contact.vue') }],
  // },


  //Route pour l'app
  {
    path: '/register',
    component: MainLayout,
    children: [{ path: '', component: RegisterPage }],
  },
  {
    path: '/login',
    component: MainLayout,
    children: [{ path: '', component: LoginPage }],
  },
  {
    path: '/offresemploi',
    component: MainLayout,
    children: [{ path: '', component: OffresEmploiPage }],
  },
  {
    path: '/offresemploi/ajout',
    component: MainLayout,
    children: [{ path: '', component: FormOffresEmploiPage }],
  },
  {
    path: '/offresemploi/modif',
    component: MainLayout,
    children: [{ path: '', component: UpdateOffresEmploiPage }],
  },
  

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue'),
  },
];

export default routes;

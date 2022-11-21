import { createWebHistory, createRouter } from 'vue-router';

import Home from './components/HomePage.vue';
import Login from './components/User/Login.vue';
import Registration from './components/User/Registration.vue';
import Posts from './components/Blog/Posts.vue';

const routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/login', name: 'login', component: Login },
    { path: '/reg', name: 'registration', component: Registration },
    { path: '/posts', name: 'posts', component: Posts },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;

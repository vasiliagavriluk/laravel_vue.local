<template>
    <!-- Типо template -->
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <router-link :to="{name: 'home'}" class="me-3 py-2 text-dark text-decoration-none">Главная</router-link>
            <div class="d-inline-flex mt-2 mt-md-0 ms-md-auto col-4 d-flex justify-content-end align-items-center">
                <div v-if="access_token.length">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ users_name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" @click="logout">logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div v-else>
                    <router-link :to="{name: 'login'}" class="btn btn-sm btn-outline-secondary">Sign up</router-link>
                </div>
            </div>
        </div>
    </header>
    <!-- Контент страницы -->
    <router-view />
</template>

<script>

import router from "@/router";

export default {
    name: "App",
    data() {
        return {
            errors: [],
            access_token: [],
            users_name:null,
            api: null,
        }
    },
    mounted() {
        if (localStorage.getItem('access_token'))
        {
            this.access_token = localStorage.getItem('access_token');
            this.users_name = localStorage.getItem('users_name');
            this.initApi()
        }
        else
        {
            router.push({ name: 'login' });
        }
    },
    methods:{
        logout()
        {
            this.api.post('/api/auth/logout').then( res =>
            {
                this.access_token = [];
                localStorage.removeItem('access_token')
                router.push({ name: 'login' });
            }).catch(error => {
                console.log(error)
            });
        },
        initApi()
        {
            const api = axios.create();
            //start request
                api.interceptors.request.use(
        config => {
                    if (this.access_token){
                        config.headers = { 'authorization': `Bearer ${this.access_token}` }
                        return config;
                    }},
        error => {});
            //end request
            //start response
                api.interceptors.response.use(
        config => {
                    if (this.access_token){
                        config.headers = { 'authorization': `Bearer ${this.access_token}` }
                        return config;
                    }},
        error => {});

            // end response

            this.api = api;
        }
    }
}
</script>

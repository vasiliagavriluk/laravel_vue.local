<template>

    <div id="login">
        <h3 class="text-center text-black pt-5">Login</h3>
        <div class="container" v-if="errors.length">
            <div v-for="error in errors">
                <ul v-for="err in error.errors">
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ err[0] }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </ul>
            </div>
        </div>
        <div class="container w-25">
            <input v-model="email" type="email" class="form-control mb-3" placeholder="email">
            <input v-model="password" type="password" class="form-control mb-3" placeholder="password">
            <input @click="login" type="submit" class="btn btn-primary mb-3">
        </div>
    </div>
    <p class="small text-center text-gray-soft">Don't have an account yet? <router-link :to="{name: 'registration'}">Sign in</router-link></p>
</template>

<script>
import router from "@/router";
export default {
    name: "Login",
    data() {
        return {
            errors: [],
            email:null,
            password:null,
        }
    },
    methods: {
        login(event){
            this.errors = [];
            axios.post('/api/auth/login',
                {
                    email: this.email,
                    password: this.password
                }).then( res =>
            {
                localStorage.access_token = res.data.authorisation.token;
                localStorage.users_id = res.data.user.id;
                localStorage.users_name = res.data.user.name;
                router.push({ name: 'home' });

            }).catch(error => {
                this.errors.push(error.response.data);
            });
        }
    }
}
</script>

<style scoped>

</style>

<template>
    <div>
        <h3 class="text-center text-black pt-5">Registration</h3>
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
            <input v-model="name" type="text" class="form-control mb-3 " placeholder="name">
            <input v-model="email" type="email" class="form-control mb-3" placeholder="email">
            <input v-model="password" type="password" class="form-control mb-3" placeholder="password">
            <input v-model="password_confirmation" type="password" class="form-control mb-3" placeholder="confirm password">
            <input @click="greet" type="submit" class="btn btn-primary">
        </div>
    </div>

</template>

<script>
import router from "@/router";

export default {
    data() {
        return {
                errors: [],
                name: null,
                email: null,
                password: null,
                password_confirmation: null,
               }
    },
    methods: {
        greet(event) {
            this.errors = [];
            axios.post('/api/auth/register',
                {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                }).then( res =>
                {
                    router.push({ name: 'home' });

                }).catch(error => {
                this.errors.push(error.response.data);
                    console.log(error.response.data);
                });
        }
    }
}
</script>

<style scoped>

</style>

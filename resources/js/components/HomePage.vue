<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Список статей</h4>
                <div class="d-grid gap-2 d-md-flex">
                    <a class="btn btn-link" href="">Добавить</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Users</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="val in value" class="text-start align-middle">
                                    <td>{{ val.id }}</td>
                                    <td>{{ val.title }}</td>
                                    <td>{{ val.users}}</td>
                                    <td v-if="users_id == val.user_id">
                                        <button v-on:click="initBlogEdit(val.id)" type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                    </td>
                                    <td v-else></td>
                                    <td v-if="users_id == val.user_id">
                                        <button v-on:click="initBlogDelete(val.id)" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                    <td v-else></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import router from "@/router";

export default {
    name: "HomePage",
    data() {
        return {
            errors: [],
            access_token: [],
            value: null,
            api: null,
            users_id: null,
        }
    },
    mounted() {
        if (localStorage.getItem('access_token'))
        {
            this.access_token = localStorage.getItem('access_token');
            this.users_id = localStorage.getItem('users_id');


            this.initApi()
            this.initBlog()
        }
        else
        {
            router.push({ name: 'login' });
        }
    },
    methods:
        {
            initBlog()
            {
                this.api.post('/api/auth/blog').then( res =>
                {
                    this.value = res.data;
                }).catch(error => {
                    console.log(error)
                });
            },
            initBlogEdit($id)
            {
                router.push({ name: 'posts', query: { id: $id } })

            },
            initBlogDelete($id)
            {
                this.api.post('/api/auth/blog/delete', {id: $id}).then( res =>
                {
                    this.initBlog();
                }).catch(error => {
                    console.log(error)
                })
            },
            initApi()
            {
                const api = axios.create();

                api.interceptors.request.use(
                    config => {
                        if (this.access_token){
                            config.headers = { 'authorization': `Bearer ${this.access_token}` }
                            return config;
                        }},
                    error => {});

                api.interceptors.response.use(
                    config => {
                        if (this.access_token){
                            config.headers = { 'authorization': `Bearer ${this.access_token}` }
                            return config;
                        }},
                    error => {});

                this.api = api;
            }

        }




}
</script>

<style scoped>

</style>

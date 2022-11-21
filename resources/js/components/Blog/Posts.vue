<template>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <div>
                        <h6 class="my-0">Created at: </h6>
                        <small class="text-muted">{{ created_at }}</small>
                    </div>
                </li>
            </ul>

            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <div>
                        <h6 class="my-0">Author: </h6>
                        <small class="text-muted">{{ author }}</small>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <div class="needs-validation" novalidate="">
                    <div class="row mb-3">
                        <div class="col-2">
                            <label class="form-label">ID</label>
                        </div>
                        <div class="col-1">
                            <input type="text" class="form-control" id="id" v-bind:value=" this.id " disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <label class="form-label">Title</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control" id="title" v-bind:value=" this.title ">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <label class="form-label">Content</label>
                        </div>
                        <div class="col-10">
                            <textarea class="form-control" name="content_raw" id="content" rows="10"> {{ content }} </textarea>
                        </div>
                    </div>
                <hr class="my-4">
                <button v-on:click="edit" class="w-100 btn btn-primary btn-lg" type="submit">Updated</button>
            </div>
        </div>
    </div>





</template>

<script>
import moment from 'moment'
export default {
    name: "Posts",
    data() {
        return {
            errors: [],
            access_token: [],
            value: null,
            id: null,
            title: null,
            content: null,
            author: null,
            created_at: null,
            api: null,
        }
    },
    mounted() {
            this.access_token = localStorage.getItem('access_token');
            this.initApi()
            this.posts(this.$route.query.id)

    },
    methods:{
        format_date(value){
            if (value) {
                return moment(String(value)).format('YYYY-MM-DD HH:mm:ss')
            }
        },
        posts($id)
        {
            this.api.post('/api/auth/blog/edit', {id: $id }).then( res =>
            {
                this.id = res.data.id
                this.title = res.data.title
                this.content = res.data.content
                this.author = res.data.author
                this.created_at = this.format_date(res.data.created_at)

            }).catch(error => {
                console.log(error)
            });
        },
        edit(){
            this.api.post('/api/auth/blog/update',
                {
                    id: id.value,
                    title: title.value,
                    content: content.value
                }).then( res =>
                {
                    if(res.data.success == 'Успешно сохранено'){
                        this.posts(this.id)
                    }

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

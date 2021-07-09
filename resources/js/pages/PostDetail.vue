<template>
    <div>
        <div class="card mb-3" >

                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{ post.title }}</h5>
                        <span v-if="post.category" class="badge badge-success custom-badge">{{ post.category.name }}</span>
                    </div>
                    <i>{{ post.created_at }}</i>
                    <p class="card-text">{{ post.content }}</p>
                    <router-link class="btn btn-secondary" :to="{ name: 'blog'}">Torna indietro</router-link>
                </div>

        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name : 'PostDetail',
    data(){
        return{
            post:{}
        }
    },
    mounted(){
        // $route è un oggetto passato dal router e contiene i paramentri passati dal router-link
        console.log(this.$route.params.slug);
        axios.get("http://127.0.0.1:8000/api/posts/" + this.$route.params.slug)
            .then(res =>{
                console.log(res.data);
                if(res.data.success){
                    this.post = res.data.data
                }else{  //altrimenti reindirizzo verso la pagina 404
                    this.$router.push({name: 'error404'})
                }
            })
            .catch(err =>{
                console.log(err);
            })
    }

}
</script>

<style>

</style>

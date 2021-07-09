<template>

        <div class="card mb-3" >

                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{ title }}</h5>
                        <span class="badge badge-success custom-badge">{{ category }}</span>
                    </div>
                    <i>{{ date }}</i>
                    <p class="card-text">{{ truncateTex }}</p>
                    <router-link class="btn btn-primary" :to="{ name: 'postDetail', params:{ slug }}">Vedi post</router-link>
                </div>

        </div>

</template>

<script>
export default {
    name: 'Card',
    props:['title','category','date','content','slug'],
    data(){
        return{
            maxLengthText:150
        }
    },
    computed:{ //le computed sono funzioni che vengono attivate quando vengono modificate delle variabili in esse contenute e devono avere per forza un return
        truncateTex(){
            let text = this.content;
            if(text.length > this.maxLengthText){
                text = text.substr(0, this.maxLengthText) + '...'
            }
            return text;
        }
    }
}
</script>

<style>
.custom-badge{
    display: inline-block;
    height: 2rem;
    line-height: 2rem;
}

</style>

import Vue from 'vue'; //importo vue
import VueRouter from 'vue-router'; //importo vueRouter

Vue.use(VueRouter);//uso vueRouter

import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Contact from './pages/Contact.vue';
import Blog from './pages/Blog.vue';
import Error404 from './pages/Error404.vue';

const router = new VueRouter({
    mode: 'history', // tiene in memoria la navigazione virtuale che avviene all'interno di vue
    linkExactActiveClass: 'active',

    routes: [
        {
            path: '/', //diciamo che è la home
            name: 'home',// serve per genereare il lik
            component: Home//compnente sempre lettera maiuscola
        },
        {
            path: '/about', //diciamo che è la home
            name: 'about',// serve per genereare il lik
            component: About//componente sempre lettera maiuscola
        },
        {
            path: '/contacts', //diciamo che è la home
            name: 'contacts',// serve per genereare il lik
            component: Contact//componente sempre lettera maiuscola
        },
        {
            path: '/blog', //diciamo che è la home
            name: 'blog',// serve per genereare il lik
            component: Blog//componente sempre lettera maiuscola
        },
        {
            path: '/*', //diciamo che è la home
            name: 'error404',// serve per genereare il lik
            component: Error404//componente sempre lettera maiuscola
        },
    ]
})

export default router; //esporto il router

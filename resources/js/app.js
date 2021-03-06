/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

window.Vue = require('vue');

import App from './App.vue';
import router from './routes';


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,//prendo il router e ora si illumina sopra (import router from './routes';)
    render: h => h(App)
});

//---------------spiegazione trovata su internet----------

/* The render() function is a central piece of Vue.

In short, the templates that you write are transformed into these render funtions:

<App>
  <div>Hey</div>
</app>

is transformed to:

render(h) {
  return('App', [
    h('div', 'Hey')
  ])
}

But you can also write these functions on your own, instead of writing a template and have Vue / vue-loader convert it for you. That’s what this funtion that you show does:

It renders the App component.

You can read more about it here:
 */


console.log('Hello Guest');

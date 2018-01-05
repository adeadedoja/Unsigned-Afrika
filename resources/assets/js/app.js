
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';
import Bar from './components/Bar.vue';
import Love from './components/Love.vue';

const routes = [
  {
    name: 'Bar',
    path: '/Bar',
    component: Bar
  },
  {
        name: 'Love',
        path: '/',
        component: Love
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');

import 'owl.carousel/dist/assets/owl.carousel.css';
import $ from 'jquery';
import 'owl.carousel';

Vue.component('example', require('./components/ExampleComponent.vue'));
Vue.component('aud', require('./components/Audio.vue'));
Vue.component('playlist', require('./components/playlist.vue'));

const app = new Vue({
    el: '#ap',
    router, // Add this to your Vue instance
    //...
});

$(document).ready(function(){

});
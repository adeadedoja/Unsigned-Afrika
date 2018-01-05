import Vue from 'vue'
import VueRouter from 'vue-router'

import Bar from './components/Bar.vue'
import Love from './components/Love.vue'

let routes=[
    {
        path:'/',
        component: Bar 
    },
    {
        path:'/love',
        component: Love 
    }
];


export default new VueRouter({
    hashbang: false,
    history: true,
    mode: 'history',
    routes
})
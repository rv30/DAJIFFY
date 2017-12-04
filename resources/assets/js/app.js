import axios from 'axios'

import Vue from 'vue'

import VueAxios from 'vue-axios'

/*
axios.interceptors.request.use(function(config)
{
	config.headers['X-CSRF-TOKEN'] = windows.Laravel.csrfToken
	return config
})

Vue.prototype.$http = axios

Vue.use(VueAxios, axios)
*/
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
/*
require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
    	message:"DLV"
    }
});

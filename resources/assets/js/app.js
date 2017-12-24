
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./utils/helpers');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);
Vue.config.devtools = true
Vue.prototype.$http = window.axios

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('navbar', require('./components/NavBar.vue'));
Vue.component('sticky-footer', require('./components/StickyFooter.vue'));
Vue.component('pagination', require('./components/Pagination.vue'));
Vue.component('comments', require('./components/Comments.vue'));
Vue.component('comment-form', require('./components/CommentForm.vue'));
Vue.component('autosize-textarea', require('./components/AutosizeTextarea.vue'));

const router = new VueRouter({
    mode: 'history',
    routes: [
        { name: 'home',        path: '/', component: require('./pages/posts/Index.vue') },
        { name: 'posts.index', path: '/posts', component: require('./pages/posts/Index.vue') },
        { name: 'posts.show', path: '/posts/:id', component: require('./pages/posts/Show.vue') },
        { name: 'admin.posts.create', path: '/admin/posts/create', component: require('./pages/admin/posts/Create.vue') },
    ]
});

const app = new Vue({
    router,
    el: '#app'
});

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue').default;
const Editor = require('@tinymce/tinymce-vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('editor', Editor);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('basic-input', require('./components/elemements/input.vue').default);
Vue.component('gallery', require('./components/Gallery.vue').default);
Vue.component('carousel-slide-editor', require('./components/CarouselSlideEditor').default);
Vue.component('text-editor', require('./components/TextEditorComponent.vue').default);

Vue.component('page-product', require('./Pages/Products/Index.vue').default);
Vue.component('page-product-resource', require('./components/Pages/ProducfResource.vue').default);
Vue.component('page-category-manage', require('./components/Pages/CategoryManage.vue').default);
Vue.component('page-product-details', require('./components/Pages/ProductDetails.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#pottorffApp',
});

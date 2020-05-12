/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.$ =window.jquery =require('jquery');

require('admin-lte/plugins/jquery/jquery.min.js');
require('admin-lte/plugins/jquery-ui/jquery-ui.min.js');
require('admin-lte/plugins/chart.js/Chart.min.js');
require('admin-lte/plugins/sparklines/sparkline.js');
require('admin-lte/plugins/jqvmap/jquery.vmap.min.js');
require('admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js');
require('admin-lte/plugins/jquery-knob/jquery.knob.min.js');
require('admin-lte/plugins/moment/moment.min.js');
require('admin-lte/plugins/daterangepicker/daterangepicker.js');
require('admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');
require('admin-lte/plugins/summernote/summernote-bs4.min.js');
require('admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.j');
require('admin-lte/dist/js/adminlte.js');
require('admin-lte/dist/js/pages/dashboard.js');
require('admin-lte/dist/js/demo.js');
require('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js');
require('./bootstrap');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});



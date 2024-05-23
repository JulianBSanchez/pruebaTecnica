/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import "bootstrap/dist/css/bootstrap.min.css"
import { createApp } from 'vue/dist/vue.esm-bundler.js';



const app = createApp({});

import ExampleComponent from './Components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import MyTableCategogories from './Components/MyTableCategories.vue';
app.component('my-table-categories', MyTableCategogories);

import MyTableProducts from './Components/MyTableProducts.vue';
app.component ('my-table-productos', MyTableProducts);

import Dropdown from './Components/Dropdown.vue';
app.component('my-dropdown', Dropdown);

app.mount('#app');
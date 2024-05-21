/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';



const app = createApp({});

import ExampleComponent from './Components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import MyTable from './Components/MyTable.vue';
app.component('my-table', MyTable);

app.mount('#app');
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { createApp } from 'vue';

// Import FullCalendar
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import bootstrapPlugin from '@fullcalendar/bootstrap';

// Register the components
const app = createApp({});

import MyTableCategogories from './Components/MyTableCategories.vue';
app.component('my-table-categories', MyTableCategogories);

import MyTableProducts from './Components/MyTableProducts.vue';
app.component ('my-table-productos', MyTableProducts);

import CalendarEvent from './Components/CalendarEvent.vue';
app.component('my-calendar-event', CalendarEvent);

app.mount('#app');
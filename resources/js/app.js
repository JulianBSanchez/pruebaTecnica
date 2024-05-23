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

app.component('full-calendar', {
    template: `<div ref="calendar"></div>`,
    mounted() {
      const calendarEl = this.$refs.calendar;
      const calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, bootstrapPlugin],
        themeSystem: 'bootstrap',
        initialView: 'dayGridMonth',
        events: [
          { title: 'Event 1', date: '2024-05-01' },
          { title: 'Event 2', date: '2024-05-02' },
          // Add more events here
        ],
      });
      calendar.render();
    },
  });


import MyTableCategogories from './Components/MyTableCategories.vue';
app.component('my-table-categories', MyTableCategogories);

import MyTableProducts from './Components/MyTableProducts.vue';
app.component ('my-table-productos', MyTableProducts);

app.mount('#app');
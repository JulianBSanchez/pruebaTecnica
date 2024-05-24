<template>
    <div ref="calendar"></div>
  </template>
  
  <script>
  import { Calendar } from '@fullcalendar/core';
  import dayGridPlugin from '@fullcalendar/daygrid';
  import bootstrapPlugin from '@fullcalendar/bootstrap';
  import axios from 'axios';
  
  export default {
    data() {
      return {
        events: []
      };
    },
    mounted() {
      const calendarEl = this.$refs.calendar;
      const calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, bootstrapPlugin],
        themeSystem: 'bootstrap',
        initialView: 'dayGridMonth',
        events: this.events // Utiliza los eventos cargados desde la solicitud HTTP
      });
      calendar.render();
    },
    created() {
      axios.get('/pedido')
        .then(response => {
          // Mapea los datos de respuesta para ajustarlos al formato requerido por FullCalendar
          this.events = response.data.map(pedido => ({
            title: pedido.recordatorio,
            date: pedido.fecha
          }));
        })
        .catch(error => {
          console.error('Error al cargar los pedidos:', error);
        });
    }
  };
  </script>
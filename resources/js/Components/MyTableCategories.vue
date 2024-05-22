
<template>
  <div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Código</th>
          <th>Tipo</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in items" :key="item.id">
          <td>{{ item.codigo }}</td>
          <td>{{ item.nombre }}</td>
          <td> ver  descripción</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
  
  <script>
  import axios from 'axios';

    export default {
      data() {
        return {
          items: [ ]
        }
      },
      
      created(){
        axios.get('/categoria')
        .then(response => this.items = response.data)
        .catch();
      }
    }
  </script>
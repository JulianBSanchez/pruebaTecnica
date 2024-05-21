
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
        <tr v-for="item in items" :key="item.last_name">
          <td>{{ item.age }}</td>
          <td>{{ item.first_name }}</td>
          <td>Descripción</td>
        </tr>
      </tbody>
    </table>W
  </div>
</template>
  
  <script>
    export default {
      data() {
        return {
          items: [
            { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
            { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
            { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
            { age: 38, first_name: 'Jami', last_name: 'Carney' }
          ]
        }
      }
    }
  </script>
<template>
    <div class="container">
        <div class="row justify-content-center">
            <b-table bordered hover striped :items="items" :fields="fields"
            >

            </b-table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
          return {
            fields: ['first_name', 'last_name', 'age'],
            items: [
              { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
              { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
              { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
              { age: 38, first_name: 'Jami', last_name: 'Carney' }
            ]
          }
        },
        mounted() {
            axios.get();
        }
    }
</script>

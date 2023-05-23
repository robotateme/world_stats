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
            fields: [
              {
                 key: 'continent',
                 label: 'Continent',
                 sortable: true,
              },
              {
                key: 'region',
                label: 'Region',
                sortable: true,

              },
              {
                key: 'life_duration',
                label: 'lifeDuration',
                sortable: true,

              },
              {
                key: 'countries',
                label: 'Countries',
                sortable: true,

              },
              {
                key: 'cities',
                label: 'Cities',
                sortable: true,
              },
              {
                key: 'population',
                label: 'Population',
                sortable: true,
              },
              {
                key: 'languages',
                label: 'Languages',
                sortable: true,
              }

              ],
            items: []
          }
        },
        mounted() {
          axios.get('http://localhost/api/statistics/main')
              .then((response) => {
                  this.items = response.data?.stats;
              })
              .catch((err) => {

              })
              .finally(() => {

              });
        }
    }
</script>

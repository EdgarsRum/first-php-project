<template>
    <div id="app">
        <v-app id="inspire" red>
            <v-content>
                <v-container fluid fill-height>
                    <v-layout justify-center>
                        <v-flex shrink>
                            <v-item-group>
                                <v-btn color="green" dark v-on:click="changeState('true')">
                                    Enable
                                    <v-icon dark right>check_circle</v-icon>
                                </v-btn>
                                <v-btn color="red" dark v-on:click="changeState('false')">
                                    Disable
                                    <v-icon dark right>block</v-icon>
                                </v-btn>
                                <v-btn color="purple" dark v-on:click="getRecords">
                                    Load Records
                                    <v-icon dark right>adjust</v-icon>
                                </v-btn>
                            </v-item-group>
                            <v-item-group>
                                <v-data-table
                                    :headers="headers"
                                    :items="records"
                                    class="elevation-1"
                                >
                                    <template v-slot:items="props">
                                        <td class="text-xs-right">{{ props.item.id }}</td>
                                        <td class="text-xs-right">{{ props.item.description }}</td>
                                        <td class="text-xs-right">{{ props.item.created_at }}</td>
                                        <td class="text-xs-right">{{ props.item.updated_at }}</td>
                                    </template>
                                </v-data-table>
                            </v-item-group>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-content>
            <v-footer app fixed>
                <span>&copy; Edgars App 2018</span>
            </v-footer>
        </v-app>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: 'app',
        data: () => ({
            drawer: true,
            headers: [
                { text: 'Id', value: 'id' },
                { text: 'Calories', value: 'description' },
                { text: 'Created', value: 'created_at' },
                { text: 'Updated', value: 'updated_at' },
            ],
            records: []
        }),

        methods: {
            changeState: (state) => {
                axios.get(`/apply/auto-generate/${state}`);
            },
            getRecords: function() {
                axios.get('/apply/records')
                    .then((response) => {
                        this.records = response.data;
                    })
            },
        }
    }
</script>

<style>
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }
</style>

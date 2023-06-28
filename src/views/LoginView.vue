

<template>
    <v-container class="fill-height">
            <v-btn text class="white--text" to="/register">
                <label>
                  Register
                </label>
              </v-btn>
    <div class="login">
      <v-row class="" align="center" justify="center">
        <v-col col="12" sm="8" md="6">
          <v-sheet class="centered-sheet" color="teal" elevation="6" height="800" width="1080"  rounded>
            <!-- Sheet content -->
            <v-col
          cols="12"
          sm="6"
          md="3"
        >

        </v-col>
          </v-sheet>
        </v-col>          
      </v-row>
    </div>

    <v-container>
      <v-data-table
        :headers="headers"
        :items="account"
        :search="search">
        <template v-slot:item = "{ item }">
            <tr>
                <td>{{ item.id }}</td>
                <td>{{ item.username }}</td>
                <td>{{ item.email }}</td>
                <td>
                    <v-btn small color="primary" @click="editItem(item)">Edit</v-btn>
                </td>
                <td>
                    <v-btn small color="error" @click="deleteItem(item)">Delete</v-btn>
                </td>
            </tr>
        </template>
    </v-data-table>
    </v-container>
    </v-container>

  </template>

  <script>
    import axios from '../axiosdb';

    export default {

data() {
    return {
        account: [],
        headers: [
        {text: 'ID', value: 'id'},
        {text: 'Username', value: 'username'},
        {text: 'Email', value: 'email'},
        {text: 'Actions', sortable:false}
        ],   
        search: '',
    };
},
mounted() {
    this.fetchData();
  },

  methods: {
    fetchData() {
        axios.get('/api/displayAll')
        .then(response=> {
            this.account = response.data;
        })
        .catch(error=> {
            alert("There's Something Wrong!");
        });
    },
    editItem(item) {
        alert("Updated Successfully", item);
    },
    deleteItem(item){
        alert("Deleted Successfully! ", item);
    },
  },




}
</script>
  
  
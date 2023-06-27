

<template>
    <v-container class="fill-height">
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
        <v-form @submit.prevent="submitForm">
          <v-text-field label="Username" v-model="username" ref="username">
            <!--  -->
          </v-text-field>
          <v-text-field label="Email" v-model="email" ref="email">
            <!--  -->
          </v-text-field>
          <v-text-field label="Confirm Email" v-model="confirmedEmail" ref="confirmedEmail">
            <!--  -->
          </v-text-field>
          <v-text-field label="Password" v-model="password" ref="password">
            <!--  -->
          </v-text-field>
          <v-btn elevation="2" v-on:click="submit">
            <label>Submit</label>
          </v-btn>
        </v-form>
        </v-col>
          </v-sheet>
        </v-col>          
      </v-row>
    </div>

    <v-spacer></v-spacer>

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
        methods: {
    submit() {
    if (this.confirmedEmail != this.email) {
      alert("Email Not Match");
      return;
    } 

    const data = {                    
      username: this.username,
      email: this.email,
      password: this.password
    };
    alert("Account added Successfully");
    axios.post('../api/createUser', data);
    
  }
},
mounted() {
  // Access the $refs property here
  console.log(this.$refs);
},

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
  
  
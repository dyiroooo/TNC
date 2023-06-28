<template>
    <div class="register">
        <v-form @submit.prevent="submitForm">
              <v-text-field label="Username" type="text" v-model="username" ref="username" required minlength="8"></v-text-field>
              <v-text-field type="email" label="Email" v-model="email" ref="email" required></v-text-field>
              <v-text-field label="Confirm Email" type="email" v-model="confirmedEmail" ref="confirmedEmail" required></v-text-field>
              <v-text-field type="password" label="Password" v-model="password" ref="password" required minlength="32"></v-text-field>
              <v-btn elevation="2" v-on:click="submit">
                <label>Submit</label>
              </v-btn>
            </v-form>     
    </div>

    
    
</template>

<script>
import axios from '../axiosdb';
export default {
    data () {
        return {
            username: this.username,
            email: this.email,
            confirmedEmail: this.confirmedEmail,
            password: this.password,
        }

    },
        methods: {
        submit() {

            if (this.username === '' || this.email === '' || this.confirmedEmail === '' || this.password === '') {
                alert("Cannot Proceed with Empty Fields! ");
                // this.showAlert = false;
                return;
            } else if (this.email !== this.confirmedEmail) {
                alert("Email Does Not Match");
                this.email = '',
                this.confirmedEmail = ''
                return;
            } else {
                const data = {
                    username: this.username,
                    email: this.email,
                    password: this.password
                };
                alert("Account added Successfully");
                axios.post('../api/createUser', data);
                this.username = '',
                this.email = '',
                this.confirmedEmail = '',
                this.password = ''
                return;
            }
                
        }
    },
    mounted() {
        // Access the $refs property here//
        console.log(this.$refs);
    },
}
</script>
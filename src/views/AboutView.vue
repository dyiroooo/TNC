<template>
  <div class="about">
    <v-app-bar app class="teal darken-2 white--text">
      <!-- <v-app-bar-nav-icon class="white--text" @click="toggleSidebar" v-if="showSidebarIcon" /> -->
      <v-toolbar-title>The New Crossroads</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn text class="white--text" to="/home">Home</v-btn>
      <v-btn text class="teal darken-1--text">About</v-btn>
      <v-btn text class="white--text">Contact</v-btn>
      <v-btn elevation="2" text class="white--text" to="/login">Login</v-btn>
    </v-app-bar>
  </div>
</template>

<script>
export default {
     data() {
    return {
      showSidebarIcon: true,
    };
  },
  methods: {
    toggleSidebar() {
      // Implement the functionality to toggle the sidebar
      
    },
  },
}
</script>
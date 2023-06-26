<template>
  <div class="home">
     <v-app-bar app class="teal darken-2 white--text">
      <v-app-bar-nav-icon class="white--text" @click="toggleSidebar" v-if="showSidebarIcon" />
      <v-toolbar-title>The New Crossroads</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn text class="white--text">Home</v-btn>
      <v-btn text class="white--text">About</v-btn>
      <v-btn text class="white--text">Details</v-btn>
      <v-btn text class="white--text">Contact</v-btn>
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
};
</script>

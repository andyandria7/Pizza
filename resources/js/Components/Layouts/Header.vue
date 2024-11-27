<script setup>
import { onMounted } from 'vue';
import Navbar from './Navigation/Navbar.vue';
import 'aos/dist/aos.css';
import AOS from 'aos';

onMounted(() => {
    // Refresh AOS when component is mounted
    AOS.refresh();
});
</script>

<template>
    <Navbar/>
      
</template>

<style>


</style>
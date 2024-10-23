<script setup>
    import Header from "./Header.vue";
    import Footer from "./Footer.vue";
</script>

<template>
    <Header></Header>
    <div>
        <slot></slot>
    </div>
    <Footer></Footer>
</template>

<style>
    
</style>
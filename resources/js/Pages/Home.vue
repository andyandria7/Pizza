<script setup>
import About from "@/Components/Home/About.vue";
import Content from "@/Components/Home/Content.vue";
import Meet from "@/Components/Home/Meet.vue";
import Menu from "@/Components/Home/Menu.vue";
import Reservation from "@/Components/Home/Reservation.vue";
import Service from "@/Components/Home/Service.vue";
import Testi from "@/Components/Home/Testi.vue";
import Updated from "@/Components/Home/Updated.vue";
import Layout from "@/Components/Layouts/Layout.vue";

</script>

<template>
    <Layout>
        <Content />
        <About/>
        <Menu />
        <Testi/>
        <Meet/>
        <Reservation/>
        <Service/>
        <Updated/>
    </Layout>
</template>

<style></style>
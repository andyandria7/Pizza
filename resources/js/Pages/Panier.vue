<script setup>
import CardPizza from '@/Components/Card/CardPizza.vue';
import Filter from '@/Components/Home/Filter.vue';
import Layout from '@/Components/Layouts/Layout.vue';

    
</script>

<template>
    <Layout>
        <section class="my-7 flex flex-col lg:flex-row">
            <div class=" w-96 h-screen">
                <Filter/>
            </div>
            <div class="my-12 flex justify-center items-center w-full  ">
                
                <h1 class="font-pacifico text-2xl underline">Aucune Pizza dans le panier</h1>

            </div>
        </section>
    </Layout>
</template>

<style>
    
</style>
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
            <div class="my-12 grid grid-cols-3 gap-4   ">
                <template v-for="i in 10">
                    <CardPizza 
                    :id="i"
                    img ="/images/cardPizza.svg"
                    :title="'Pizza Margherita ' + i"
                    description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
                    prix="10K Ar"
                    />
                </template>
            </div>
        </section>
    </Layout>
</template>

<style>
    
</style>
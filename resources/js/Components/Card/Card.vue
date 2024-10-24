<script setup>
import { Type } from 'lucide-vue-next';

    defineProps({
        title: {
            Type: String,
        },
        image:{
            Type: String,
        },
            description: {
                Type: String,
            }
    })
</script>

<template>
    <div class="bg-greyPizza w-72 p-11 mx-6 rounded-2xl font-nunito">
            <img :src="image" alt="">
            <p class="font-extrabold font-nunito my-3">{{ title }}</p>
            <p>{{ description }}</p>
        </div>
</template>

<style>
    
</style>
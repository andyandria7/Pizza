<script setup>
    
    defineProps({
        desc: {
            Type: String
        },
        user: {
            Type: String
        },
        metier: {
            Type: String
        },
    })
</script>

<template>
    <div class="border-t-2 mx-5 lg:mx-40 mt-10 text-center">
                <img src="/icons/gillemet.svg" alt="">
                <p>{{ desc }}</p> 
                <div class="flex items-center justify-center gap-5 mt-5 font-nunito text-lg">
                    <p>{{ user }}</p>
                    <div class="w-2 h-10 bg-white"></div>
                    <p class="text-gray-400">{{ metier }}</p>
                </div>
            </div>
</template>

<style>
    
</style>
<script setup>
import { LucideFacebook, LucideInstagram, LucideTwitter, LucideLinkedin } from 'lucide-vue-next';

defineProps({
    img: {
        Type: String,
    },
    name: {
        Type: String,
    },
    rols: {
        Type: String
    }
})
</script>

<template>
    <div class="flex flex-col items-center">
        <div class="flex items-center justify-center  my-4 w-96">
            <div class="h-80 w-80 custom-shadow absolute -z-10 rounded-full border border-black"></div>
            <img class="h-96" :src="img" alt="">
        </div>
        <p class="text-lg font-pacifico text-orangePizza">{{ name }}</p>
        <p class="text-sm font-semibold text-gray-500">{{ rols }}</p>
        <div class="flex gap-4 mt-4">
            <LucideFacebook class="w-6 h-6 text-blue-600" />
            <LucideInstagram class="w-6 h-6 text-pink-600" />
            <LucideTwitter class="w-6 h-6 text-blue-400" />
            <LucideLinkedin class="w-6 h-6 text-blue-800" />
        </div>
    </div>
</template>

<style></style>
<script setup>
import { Link } from '@inertiajs/vue3';

    defineProps({
        img : {
            type : String
        },
        title : {
            type : String
        },
        description : {
            type : String
        },
        prix : {
            type : String
        },
        id : {
            type : Number
        }
    });
</script>

<template>
    <Link :href="route('menuView',  id )" class="flex-shrink-0 m-2 w-60 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
      </svg>
      <div class="relative pt-10 flex items-center justify-center">
        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
        <img class="relative w-48" :src="img" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
        <p class="block opacity-75 -mb-1" v-if="description.length > 50">{{ description.slice(0, 20) + "..." }}</p>
        <p class="block opacity-75 -mb-1" v-else>{{ description }}</p>
        <div class="flex justify-between">
          <p class="block font-semibold text-xl">{{ title.slice(0, 20) }}</p>
          <p class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">{{ prix }}</p>
        </div>
      </div>
    </Link>
</template>

<style>
    
</style>
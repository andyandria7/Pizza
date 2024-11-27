<script setup>
import SearchIcons from '@/Components/Svg/SearchIcons.vue';
import { ChevronDown } from 'lucide-vue-next';
    
</script>

<template>
    <div class="bg-orangePizza px-7 py-2 flex justify-between items-center">
        <a href="/" class="relative flex items-center gap-2" data-aos="flip-right" data-aos-duration="2000" data-aos-easing="ease-out-cubic"
        >
            <img src="/icons/logo.svg" alt="">
            <h1 class="font-extrabold text-2xl">Pizza</h1>
        </a>
        <div>
            <form class="relative z-10" data-aos="fade-left" data-aos-delay="800">
                <SearchIcons
                    class="absolute  top-1/2 transform -translate-y-1/2 left-3 w-5 h-5 text-gray-400 pointer-events-none" />
                    <input type="search" name="search" id="search" placeholder="Que recherchez-vous ?"
                    class="bg-orange-800/25 text-white font-pacifico w-10 h-10 rounded-full border border-white outline-none cursor-pointer focus:w-64 focus:border-orangePizza pl-12 pr-4 transition-all duration-500 ease-in-out  focus:cursor-text
                    lg:w-full lg:h-full placeholder:text-white/65 
                    ">
           
            </form>
        </div>
        <div class="flex items-center gap-4">
            <button class="flex cursor-pointer items-center gap-2 bg-white px-4 py-2 rounded-full">
                <img src="/images/plus.svg" alt="">
                <p class="hidden lg:block">Ajout Pizza</p>
            </button>
            <div class="flex cursor-pointer items-center gap-2">
                <img src="/images/user.svg" class="h-12" alt="">
            <ChevronDown class="w-5 h-5 text-white" />
            </div>
        </div>
    </div>
</template>

<style>
    
</style>
<script setup>
import { Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import { Menu, X } from 'lucide-vue-next';
import SearchIcons from '@/Components/Svg/SearchIcons.vue';
import Bag from '@/Components/Svg/Bag.vue';
import Primary from '@/Components/Button/Primary.vue';

const isOpen = ref(false);

onMounted(() => {
    if (window.innerWidth >= 1024) {
        isOpen.value = true;
    } else {
        isOpen.value = false
    }
})
</script>

<template>
    <nav
        class="flex lg:px-36 px-4 items-center justify-between bg-transparent py-6 max-w-screen-2xl mx-auto max text-white font-nunito ">
        <a href="/" class="flex items-center gap-2" data-aos="flip-right" data-aos-duration="2000" data-aos-easing="ease-out-cubic"
        >
            <img src="/icons/logo.svg" alt="">
            <h1 class="font-extrabold text-2xl">Pizza</h1>
        </a>


        <!-- links -->
        <div :class="[isOpen ? 'max-h-screen opacity-100' : 'max-h-0 opacity-0', 'lg:flex flex-col lg:flex-row lg:gap-10 transition-all duration-500 ease-in-out']"
            class="absolute lg:relative lg:flex flex flex-col lg:flex-row lg:gap-10 backdrop-blur-md lg:backdrop-blur-none top-20 left-0 w-full lg:w-auto bg-transparent lg:bg-transparent lg:top-0 lg:left-0 lg:mx-auto gap-3 mt-5 lg:mt-0 p-6">
            <Primary :link="route('home')" data-aos="fade-down" data-aos-delay="300">Home</Primary>
            <Primary :link="`/`" data-aos="fade-down" data-aos-delay="400">About</Primary>
            <Primary :link="`/`" data-aos="fade-down" data-aos-delay="500">Commande</Primary>
            <Primary :link="`/`" data-aos="fade-down" data-aos-delay="600">Menu</Primary>
            <Primary :link="`/`" data-aos="fade-down" data-aos-delay="700">Contact</Primary>
        </div>

        <!-- icons -->
        <div class="flex lg:ml-auto gap-6 mt-4 lg:mt-0">
            <form class="relative z-10" data-aos="fade-left" data-aos-delay="800">
                <SearchIcons
                    class="absolute  top-1/2 transform -translate-y-1/2 left-3 w-5 h-5 text-gray-400 pointer-events-none" />
                <input type="search" name="search" id="search"
                    class="bg-transparent w-12 h-12 rounded-full border border-white outline-none cursor-pointer focus:w-64 focus:border-orangePizza pl-12 pr-4 transition-all duration-500 ease-in-out  focus:cursor-text">
            </form>
            <Link class="mt-2" data-aos="fade-left" data-aos-delay="1200" data-aos-easing="ease-out-cubic">
            <Bag class="hover:text-orangePizza" />
            </Link>
        </div>

        <!-- hamburger menu -->
        <button @click="isOpen = !isOpen" class="lg:hidden">
            <transition name="fade" mode="out-in">
                <Menu v-if="!isOpen" class="w-9 h-9 transition-transform duration-300" key="menu-icon" />
                <X v-else class="w-9 h-9 transition-transform duration-300" key="x-icon" />
            </transition>
        </button>
    </nav>
</template>

<style>
nav{
    overflow: hidden;
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.fade-enter,
.fade-leave-to {
    opacity: 0;
    transform: rotate(-90deg);
}
</style>
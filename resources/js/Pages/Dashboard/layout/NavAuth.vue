<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import DashboardSvg from "../../../Components/DashboardSvg.vue";
import CommandeSvg from "@/Components/CommandeSvg.vue";


const { url } = usePage().props;
const menus =[
    {
        icon: DashboardSvg,
        text: "Tableau de bord",
        link: route("dashboard"),
    },
    {
        icon: CommandeSvg,
        text: "Commandes",
        link: route("commandes"),
    }
]

function normalize(url) {
    return new URL(url, window.location.origin).pathname;
}
</script>

<template>
    <div class="fixed max-lg:hidden w-[24%] top-[6.1rem] ">
        <div class="w-full bg-white space-ycommandes-3 p-8 h-screen-minus-20">
            <Link
            v-for="menu in menus"
            :href="menu.link"
            :key="menu.icon"
            :class="{ active: normalize(menu.link).includes(normalize(currentUrl))  }"
            class="flex items-center max-w-[260px] hover:bg-orangePizza font-semibold transition duration-300 rounded-2xl hover:text-white hover:shadow-sm cursor-pointer p-4 space-x-3 text-gray-600 text-base"
        >
            <component :is="menu.icon" />
            <p>{{ menu.text }}</p>
        </Link>
        </div>
    </div>
</template>

<style>
    
</style>
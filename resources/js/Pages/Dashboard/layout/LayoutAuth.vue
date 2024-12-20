<script setup>
import Information from '@/Components/Information.vue';
import HeaderAuth from './HeaderAuth.vue';
import NavAuth from './NavAuth.vue';


const info = [
     {
        icons: "/images/icons.svg",
        title: "Pizza Delivery",
        number: "80",
        style: "bg-gradient-to-tr from-purple-800 via-purple-300 to-fuchsia-700 p-3 w-fit rounded-xl  aspect-square"
     }
]
    

</script>

<template>
    <div>
        <HeaderAuth />
        <NavAuth />
        <div class="lg:p-10 relative min-h-screen-minus-20 lg:left-[22%] lg:w-[76%] p-6">
            <div v-if="String($page.url) === '/admin' || String($page.url) === '/create'">

            </div>
            <div v-else  v-for="item in info" :key="item.title" class="flex space-x-10">
                <Information :image="item.icons" :title="item.title" :number="item.number" :style="item.style" />
            </div>
            <slot></slot>
        </div>
    </div>
</template>

<style></style>
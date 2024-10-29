<script setup>

    defineProps({
        icon: {
            type: Object
        },
        title: {
            type: String
        },
        description: {
            type: String
        },
        number: {
            type: Number
        }
    })
</script>

<template>
    <div class="flex flex-col items-center justify-center gap-5 my-10 relative">
        <div class="h-52 w-52 custom-shadow rounded-full flex items-center justify-center hover:bg-orangePizza hover:text-white relative">
            <component :is="icon" :size="100" />
            <p class="absolute -top-2 right-10 bg-white text-black rounded-full h-8 w-8 flex items-center justify-center font-bold text-sm  border shadow-2xl">
                {{ number }}
            </p>
        </div>
        <h1 class="font-pacifico text-3xl">{{ title }}</h1>
        <p class="w-60 text-center text-sm">{{ description }}</p>
    </div>
</template>

<style>
    
</style>
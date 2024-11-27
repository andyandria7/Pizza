<script setup>

defineProps({
    icons1: {
        type: Object,
    },
    number1: {
        type: Number
    },
    icons2:{
        type: Object
    },
    number2: {
        type: Number
    },
    info: {
        type: String
    },
    img:{
        type: String
    },
    title: {
        type: String
    },
    desciption:{
        type: String
    }
})
</script>

<template>
    <div class="bg-white rounded-2xl my-10">
        <div class="text-gray-400 flex items-center justify-center p-2 gap-2">
            <component :is="icons1"/>
            <p>{{ number1 }}</p>
            <div class="w-1 h-5 bg-gray-400"></div>
            <component :is="icons2"/>
            <p>{{ number2 }}</p>
            <div class="w-1 h-5 bg-gray-400"></div>
            <h4 class="text-orangePizza">{{ info }}</h4>
        </div>
        <div>
            <img class="w-80 h-52 bg-no-repeat bg-center" :src="img" alt="">
        </div>
        <div class="w-80 p-5">
            <p class="font-pacifico w-48">{{ title }}</p>
            <p class="text-sm">{{ desciption }}.</p>
        </div>
    </div>
</template>

<style></style>
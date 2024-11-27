<script setup>
defineProps({
    style: {
        type: String,
    },
    image: {
        type: String,
    },
    title: {
        type: String,
    },
    number: {
        type: Number,
    }
})
</script>

<template>
    <div class="flex items-center gap-5">
        <div
        :class="style"
        >
            <img :src="image" class="" alt="">
        </div>
        <div class="font-nunito">
            <p>{{ title }}</p>
            <p class="font-extrabold ">{{ number }}</p>
        </div>
    </div>
</template>

<style></style>
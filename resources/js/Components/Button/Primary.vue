<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    link:{
        type: String,
    }
})
</script>
<template>
    <Link v-if="link" :href="link" class="relative group hover:text-orangePizza">
        <slot></slot>
    </Link>

    <button v-else class="bg-orange-500 text-white py-3 px-8 rounded-full hover:bg-orange-600 transition duration-300">
        <slot></slot>
    </button>

</template>

<style>
.group::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0;
    height: 2px;
    background-color: #E5612F;
    transition: width 0.3s ease;
}

.group:hover::after {
    width: 100%;
}
</style>
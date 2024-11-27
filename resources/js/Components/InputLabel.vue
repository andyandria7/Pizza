<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label class="block text-sm font-medium text-gray-700">
        <p v-if="value">{{ value }}</p>
        <p v-else><slot /></p>
    </label>
</template>

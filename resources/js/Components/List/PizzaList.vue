<script setup>
import {  Edit, Trash } from 'lucide-vue-next';
import { ref } from 'vue';
import CustomModal from '../modal/CustomModal.vue';
import DeleteModal from '../modal/DeleteModal.vue';

defineProps({
    image: {
        type: String,
    },
    title: {
        type: String,
    },
    date: {
        type: String,
    },
})

const openConfirmation = ref(false);

</script>

<template>
    <div class="flex justify-between items-center">
        <div class="px-5  flex items-center space-x-4 ">
            <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
            <p>{{ title }}</p>
        </div>
        <div>
            <p>{{ date }}</p>
        </div>
        <div class="flex items-center space-x-4">
            <!-- Icône Stylo (Édition) -->
            <button class="text-blue-500 hover:text-blue-600">
                <Edit size="24" />
            </button>

            <!-- Icône Corbeille (Suppression) -->
            <button @click="openConfirmation = true" class="text-orange-500 hover:text-orange-600">
                <Trash size="24" />
            </button>
        </div>
        <CustomModal custom-class="sm:!max-w-2xl" :open="openConfirmation " @close="openConfirmation = false">
            <DeleteModal @close="openConfirmation = false" />
        </CustomModal>
    </div>
</template>

<style></style>
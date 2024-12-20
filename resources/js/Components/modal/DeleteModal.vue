<script setup>
import { X } from "lucide-vue-next";
const emit = defineEmits(["close", "confirm"]);
</script>

<template>
    <div
        @click="emit('close')"
        class="uppercase absolute cursor-pointer items-center right-6 text-[0.75rem] flex"
    >
        
        <X class="w-5"></X>
    </div>
    <div class="w-full space-y-10 mt-6">
        <div class="flex gap-4 items-center">
            <div class="p-2 rounded-full bg-gradient-red w-fit">
                <DeleteSvg class="text-white w-8 h-8"></DeleteSvg>
            </div>
            <div>
                <b>Supprimer une Pizza</b>
                <p class="text-sm">
                    Voulez-vous vraiment supprimer cette pizza ?
                </p>
            </div>
        </div>
        <div
            class="flex items-center w-full shadow-lg py-2 rounded-xl justify-between"
        >
            <div class=" mx-3 h-10 w-10 rounded-full bg-slate-600">
                <!-- <img :src="sheet?.logo || '/images/logo_.png'" alt="" class="h-10 w-10 rounded-full"> -->
            </div>
            <div class="flex-1 text-sm font-medium">
                <p>Franchise Antonio & Marco</p>
            </div>
            <div class="flex-1 text-sm font-light">
                <p>Décembre 20, 2023</p>
            </div>
            
        </div>
        <div class="flex space-x-2 items-end justify-end">
            <Primary
                @click="emit('close')"
                class="border rounded-lg px-8 py-3 font-semibold cursor-pointer"
                >Annuler</Primary
            >
            <Primary
                @click="emit('confirm')"
                class="border rounded-lg !bg-[#FF3B30] text-white px-8 py-3 font-semibold cursor-pointer"
            >
                Supprimer</Primary
            >
        </div>
    </div>
</template>

<style></style>
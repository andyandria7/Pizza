<script setup>
import PizzaList from '@/Components/List/PizzaList.vue';
import LayoutAuth from './layout/LayoutAuth.vue';
import { Grid, List } from 'lucide-vue-next';


const pizzalist = [{
    title: 'Franchise Antonio & Marco',
    date: 'Décembre 20, 2023',
},
{
    title: 'Franchise Antonio & Marco',
    date: 'Décembre 20, 2023',
},
{
    title: 'Franchise Antonio & Marco',
    date: 'Décembre 20, 2023',
}]
</script>

<template>
    <LayoutAuth>
        <div v-if="pizzalist" class="flex items-end justify-end gap-3">
            <select name="" id="" class="border-none rounded-2xl h-9 focus:outline-none">
                <option value="" selected>Toutes les Annonces</option>
                <option value="1">Annonces</option>
                <option value="2">test1</option>
                <option value="3">test2</option>
            </select>
            <select name="" id="" class="border-none rounded-2xl h-9 focus:outline-none">
                <option value="" selected>Toutes les Annonces</option>
                <option value="1">Annonces</option>
                <option value="2">test1</option>
                <option value="3">test2</option>
            </select>
            <div class="flex gap-2">
                <button
                    class="p-2 rounded-full   hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <Grid class="w-5 h-5 text-gray-700" />
                </button>
                <button
                    class="p-2 rounded-full  hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <List class="w-5 h-5 text-gray-700" />
                </button>
            </div>
        </div>

        <div v-if="pizzalist" class="mt-10 font-nunito space-y-4">
            
            <PizzaList v-for="pizza in pizzalist" :key="pizza.title" :title="pizza.title" :date="pizza.date" />
           
        </div>
        <div v-else class="flex justify-center items-center w-full h-96 flex-col">
            <img src="/images/commande.svg" class="w-60 h-60" alt="">
            <p class="font-nunito font-semibold">Aucune pizza disponible</p>
            <button class="flex mt-5 cursor-pointer items-center gap-2 bg-white px-4 py-2 rounded-full">
                <img src="/images/plus.svg" alt="">
                <p class="hidden lg:block">Ajout Pizza</p>
            </button>
        </div>
    </LayoutAuth>
</template>

<style></style>
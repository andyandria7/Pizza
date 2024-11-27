<script setup>
import { ref } from 'vue';

    const options =  ref({
        Prix: [
            {value: 50, checked: false, title:'Moins de 50K AR'},
            {value: 25, checked: false, title:'Moins de 25K AR'},
            {value: 15, checked: false, title:'Moins de 15K AR'},
            {value: 10, checked: false, title:'Moins de 10K AR'}
        ],
        Qualité: [
            {value: "gm", checked: false, title:"GM"},
            {value: "pm", checked: false, title:"PM"}
        ],
        Commande: [
            {value:'livaisons', checked: false, title:"Livraison"},
            {value:'surPlace', checked: false, title:"Sur place"}
        ]
    })
</script>

<template>
    <div class=" lg:fixed ">
        <div class="rounded-xl bg-gray-300 m-10 w-72">
            <header class="text-center bg-orange-500 w-72 rounded-t-xl py-1 text-white font-nunito font-semibold text-2xl">
                Filter
            </header>

            <div v-for="(categoryOptions, category) in options" :key="category" class="bg-gray-300 rounded-b-xl px-6 py-1 ">
                <h1 class="font-pacifico text-sm px-10">{{ category }}</h1>
                <div v-for="option in categoryOptions" :key="option.value" class="my-3 flex items-center">
                    <input
                        type="radio"
                        :name="category"
                        :id="option.value"
                        v-model="option.checked"
                        class="text-orange-500 focus:ring-2 focus:ring-orange-500"
                    />
                    <label :for="option.value" class="ml-2 font-nunito text-sm">{{ option.title }}</label>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    
</style>
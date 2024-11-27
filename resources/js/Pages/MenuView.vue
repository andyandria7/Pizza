<script setup>
import { ref } from 'vue';
import Primary from '@/Components/Button/Primary.vue';
import Layout from '@/Components/Layouts/Layout.vue';

const info = ref({
    composant: [
        'Sauce tomate',
        'Jambon',
        'Champignons',
        'Mozzarella'
    ],
    qualite: [
        'GM',
        'PM'
    ]
});
</script>

<template>
    <Layout>
        <div class="my-20">
            <div class="w-full flex justify-center">
                <div class="w-1/2 border-black border-b-2 flex justify-center items-center pb-8">
                    <h1 class="font-extrabold text-5xl font-pacifico">NomPizza</h1>
                </div>
            </div>
            <div class="w-full flex justify-center">
                <div class="w-10/12 flex justify-center items-center p-8">
                    <img class="w-full h-96 object-cover bg-cover bg-no-repeat rounded-3xl" src="/images/cardPizza.svg" alt="Pizza Image">
                </div>
            </div>

            <div class="flex justify-between p-14">
                <div class="bg-gray-100 rounded-3xl p-8">
                    <div class="flex gap-56">
                        <div>
                            <p class="font-bold font-nunito underline mb-3">Composants</p>
                            <ul class="list-disc font-nunito">
                                <li v-for="(item, index) in info.composant" :key="index">{{ item }}</li>
                            </ul>
                        </div>

                        <div>
                            <p class="font-bold font-nunito underline mb-3">Qualité</p>
                            <ul class="list-disc font-nunito">
                                <li v-for="(item, index) in info.qualite" :key="index">{{ item }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <Primary>15K Ar</Primary>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style>
</style>

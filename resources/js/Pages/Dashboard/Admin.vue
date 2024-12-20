<script setup>
import CardUser from '@/Components/Card/CardUser.vue';
import LayoutAuth from './layout/LayoutAuth.vue';
import Information from '@/Components/Home/Information.vue';
import Password from '@/Components/Home/Password.vue';

    
</script>

<template>
    <LayoutAuth>
        <form action="" class="my-2 flex justify-between w-full max-w-7xl mx-auto">
            <div class="w-1/2">
                <h1 class="font-bold text-3xl font-pacifico my-7">Compte</h1>
                <div class="space-y-14">
                    <Information />
                    <Password />
                    <div class="flex justify-around">
                        <button type="submit"
                            class="bg-orangePizza text-white px-4 py-2 rounded hover:bg-orange-600">Enregistrer les
                            modifications</button>
                        <button type="button"
                            class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Annuler</button>
                    </div>
                </div>

            </div>
            <div class="w-1/3 mt-10">
                <CardUser/>
            </div>
        </form>
    </LayoutAuth>
</template>

<style>
    
</style>
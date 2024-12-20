<script setup>
    
</script>

<template>
    
    <div class=" flex items-center flex-col">
        <img src="/images/user.svg" alt="Avatar" class="w-24 h-24 rounded-full border-4 border-orangePizza">
        <h2 class="text-lg font-semibold mt-4">Americo d'Urbano</h2>
        <p class="text-sm text-gray-600">Professionnel</p>
        <div v-if="String($page.url) === '/admin'">
            <button class="mt-6 bg-orangePizza text-white px-4 py-2 rounded hover:bg-orange-600">Passer à un compte classique</button>

        </div>

    </div>
</template>

<style>
    
</style>
<script setup>
import InputLabel from '../InputLabel.vue';
import TextInput from '../TextInput.vue';

    
</script>

<template>
    <div class="text-nunito space-y-4">
        <p class="font-semibold text-xl">Changer de mot de passe</p>
        <div class="grid grid-cols-2 gap-4 items-center">
        <InputLabel
        for="password"
        value="Mot de passe actuel"
        />
        <TextInput
        id="password"
        type="password"
        class="mt-1 block w-full"
        />
        </div>   
        <div class="grid grid-cols-2 gap-4 items-center">
        <InputLabel
        for="newPassword"
        value="Nouveau mot de passe"
        />
        <TextInput
        id="newPassword"
        type="password"
        class="mt-1 block w-full"
        />
        </div>   
        <div class="grid grid-cols-2 gap-4 items-center">
        <InputLabel
        for="ConfirmPassword"
        value="Confirmer le nouveau mot de passe"
        />
        <TextInput
        id="ConfirmPassword"
        type="password"
        class="mt-1 block w-full"
        />
        </div>   
    </div>
</template>

<style>
    
</style>
<script setup>
import InputLabel from '../InputLabel.vue';
import TextInput from '../TextInput.vue';


</script>

<template>
    <div class="text-nunito space-y-4">
        <p class="font-semibold text-xl">Informations sur votre compte</p>
        <div class="grid grid-cols-2 gap-4 items-center">
            <InputLabel for="name" value="Nom" />
            <TextInput id="name" type="text" class="mt-1 block w-full" />
        </div>
        <div class="grid grid-cols-2 gap-4 items-center">
            <InputLabel for="username" value="Prénom" />
            <TextInput id="username" type="text" class="mt-1 block w-full" />
        </div>
        <div class="grid grid-cols-2 gap-4 items-center">
            <InputLabel for="email" value="Email" />
            <TextInput id="email" type="email" class="mt-1 block w-full" />
        </div>
    </div>
</template>

<style></style>
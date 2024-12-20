<script setup>
import TextInput from '@/Components/TextInput.vue';
import LayoutAuth from './layout/LayoutAuth.vue';
import InputLabel from '@/Components/InputLabel.vue';


</script>

<template>
    <LayoutAuth>
        <div class="flex items-center justify-center flex-col font-nunito gap-6">
            <label for="cover-image"
                class="w-full border border-dashed border-gray-500 p-4 rounded-xl flex justify-center items-center !bg-[#EEF2F9] cursor-pointer flex-col">
                <img :src="coverImagePreview" alt="Cover Image Preview" v-if="coverImagePreview"
                    class="rounded-xl w-full h-72 object-cover" />
                <img src="/icons/addImage.svg" alt="" v-else class="rounded-full" />
                <input type="file" id="cover-image" class="hidden" accept="image/*"
                    @change="handleImageUpload($event, 'cover')" />
                <p v-if="!coverImagePreview" class="text-[12px] text-gray-400">
                    Image de couverture
                </p>
            </label>
            <TextInput id="name" type="text"
                class="w-full border border-dashed border-gray-500 p-4 rounded-xl flex justify-center items-center !bg-[#EEF2F9] cursor-pointer flex-col text-sm"
                placeholder="Nom de la Pizza " />
            <TextInput id="composant" type="text"
                class="w-full border border-dashed border-gray-500 p-4 rounded-xl flex justify-center items-center !bg-[#EEF2F9] cursor-pointer flex-col text-sm"
                placeholder="Composant de la Pizza " />
            <textarea rows="5"
                class="w-full border border-dashed border-gray-500 p-4 rounded-xl flex justify-center items-center !bg-[#EEF2F9] cursor-pointer flex-col text-sm"
                placeholder="Composant de la Pizza "></textarea>
            <div class="flex justify-between w-full items-center font-nunito">
                <InputLabel for="qualite" value="Qualité" />
                <div class="relative">
                    <select id="qualite"
                        class="block w-full border border-gray-300 rounded-xl bg-[#EEF2F9] px-10 text-sm text-gray-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="" disabled selected>
                            Sélectionner une option
                        </option>
                        <option value="option1">PM</option>
                        <option value="option2">GM</option>
                    </select>
                </div>
            </div>
            <TextInput id="Prix" type="text"
                class="w-full border border-dashed border-gray-500 p-4 rounded-xl flex justify-center items-center !bg-[#EEF2F9] cursor-pointer flex-col text-sm"
                placeholder="Prix de la Pizza " />
            </div>
            <div class="flex justify-end gap-5 mt-10">
                <button type="submit"
                    class="bg-orangePizza text-white px-4 py-2 rounded hover:bg-orange-600">Enregistrer les
                    modifications</button>
                <button type="button"
                    class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Annuler</button>
            </div>
    </LayoutAuth>
</template>

<style></style>
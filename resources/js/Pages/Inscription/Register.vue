<script setup>
import Primary from '@/Components/Button/Primary.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link } from '@inertiajs/vue3';
import { MoveLeft } from 'lucide-vue-next';
const goBack = () =>{
    window.history.back();
}
</script>

<template>
    <div class="p-20 font-nunito">
        <header class="flex items-center justify-between">
            <MoveLeft @click="goBack" class="cursor-pointer"/>


            <p class="font-pacifico text-3xl">Register</p>
            <div></div>
        </header>
        <div class="px-10 ">
            <div>
                <TextInput id="name" type="text"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Name" required autofocus autocomplete="username" />

            </div>
            <div>
                <TextInput id="email" tye="email"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Email" required autofocus autocomplete="username" />

            </div>
            <div>
                <TextInput id="password" tye="password"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Password" required autocomplete="current-password" />
            </div>
            <div>
                <TextInput id="password_confirmation" tye="password"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Password confirmation" required autocomplete="current-password" />
            </div>
            <div class="mt-6 px-10">
                <Link  
                :href="route('loginPizza')"
                class="text-orangePizza font-bold underline">Login</Link>
            </div>
            <div>
                <Primary
                    class="w-full block mt-7 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500">
                    Login</Primary>
            </div>
        </div>
        

    </div>
</template>

<style>

</style>
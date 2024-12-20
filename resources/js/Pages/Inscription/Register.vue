<script setup>
import Primary from '@/Components/Button/Primary.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link } from '@inertiajs/vue3';
import { MoveLeft } from 'lucide-vue-next';
import { useForm } from '@inertiajs/vue3';

const goBack = () => {
    window.history.back();
}

const form = useForm({
    image: null,
    name: "",
    username: "",
    phone: "",
    email: "",
    password: "",
    password_confirmation: ""
});

const handleFileChange = (event) => {
    form.image = event.target.files[0];
}

const register = () => {
    form.post(route('registerPost'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation')
        },
        onError: () => (errors) => {
            console.log(errors);
        }
    })
}

</script>

<template>
    <div class="p-20 font-nunito">
        <header class="flex items-center justify-between">
            <MoveLeft @click="goBack" class="cursor-pointer" />

            <p class="font-pacifico text-3xl">Register</p>
            <div></div>
        </header>
        <form @submit.prevent="register" class="px-10 ">
            <div>
                <TextInput id="image" type="file"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Image" @change="handleFileChange" autofocus autocomplete="image" />
                <span v-if="form.errors.image" class="text-red-600 text-sm">{{ form.errors.image }}</span>
            </div>
            <div>
                <TextInput id="name" type="text"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Name" v-model="form.name" required autofocus autocomplete="name" />
                    <span v-if="form.errors.name" class="text-red-600 text-sm">{{ form.errors.name }}</span>
            </div>
            <div>
                <TextInput id="username" type="text"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Username" v-model="form.username" required autofocus autocomplete="Username" />
                    <span v-if="form.errors.username" class="text-red-600 text-sm">{{ form.errors.username }}</span>
            </div>
            <div>
                <TextInput id="phone" type="text"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Phone" v-model="form.phone" autofocus autocomplete="phone" />
                    <span v-if="form.errors.phone" class="text-red-600 text-sm">{{ form.errors.phone }}</span>

            </div>
            <div>
                <TextInput id="email" type="email"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Email" v-model="form.email" required autofocus autocomplete="email" />
                    <span v-if="form.errors.email" class="text-red-600 text-sm">{{ form.errors.email }}</span>
            </div>
            <div>
                <TextInput id="password" type="password"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Password" v-model="form.password" required autocomplete="current-password" />
                    <span v-if="form.errors.password" class="text-red-600 text-sm">{{ form.errors.password }}</span>
            </div>
            <div>
                <TextInput id="password_confirmation" type="password"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Password confirmation" v-model="form.password_confirmation" required
                    autocomplete="current-password" />
            </div>
            <div class="mt-6 px-10">
                <Link :href="route('loginPizza')" class="text-orangePizza font-bold underline">Login</Link>
            </div>
            <div>
                <Primary
                    class="w-full block mt-7 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500">
                    Login</Primary>
            </div>
        </form>
    </div>
</template>

<style></style>
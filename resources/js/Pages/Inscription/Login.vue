<script setup>
import Primary from '@/Components/Button/Primary.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm } from '@inertiajs/vue3';
import { MoveLeft } from 'lucide-vue-next';

const goBack = () => {
    window.history.back();
}

const form = useForm({
    email: "",
    password: ""
    
})

const login = () => {
    form.post(route("loginPost"), {
        onFinish: () => form.reset('password'),
        onError: () => (errors)=>{
            console.log(errors);
        }
    })
}
</script>

<template>
    <div class="p-20 font-nunito">
        <header class="flex items-center justify-between">
            <MoveLeft @click="goBack" class="cursor-pointer" />

            <p class="font-pacifico text-3xl">login</p>
            <div></div>
        </header>
        <form @submit.prevent="login" class="px-10 ">
            <div>
                <TextInput id="email" type="email" v-model="form.email"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Email" required autofocus autocomplete="username" />
                <span v-if="form.errors.email" class="text-red-600 text-sm">{{ form.errors.email }}</span>
            </div>
            <div>
                <TextInput id="password" type="password" v-model="form.password"
                    class="mt-7 block w-full placeholder:font-nunito bg-orangePizza/25 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500"
                    placeholder="Password" required autocomplete="current-password" />
                <span v-if="form.errors.password" class="text-red-600 text-sm">{{ form.errors.password }}</span>
            </div>

            <div class="mt-6 px-10">
                <Link :href="route('registerPizza')" class="text-orangePizza font-bold underline">Register</Link>
            </div>
            <div>
                <Primary
                    class="w-full block mt-7 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-400 placeholder-gray-500">
                    Login</Primary>
            </div>
        </form>
        <div class="flex items-center my-6">
            <div class="border-t border-gray-300 flex-grow mr-3"></div>
            <p class="text-gray-500">OR</p>
            <div class="border-t border-gray-300 flex-grow ml-3"></div>
        </div>

        <div class="grid lg:grid-cols-2 gap-4 mt-6">
            <!-- Bouton Google -->
            <div>
                <button class="social-button google">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path fill="#4285F4"
                            d="M24 9.5c3.1 0 5.5 1.2 7.1 2.3l5.2-5.2C32.3 3.4 28.5 2 24 2 14.7 2 7 9.7 7 19s7.7 17 17 17c7.8 0 14.6-5.5 16-13H24v-7.5h16.9C39.8 9.9 32.5 9.5 24 9.5z" />
                    </svg>
                    Sign in with Google
                </button>
            </div>

            <!-- Bouton Facebook -->
            <div>
                <button class="social-button facebook">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#1877F2"
                            d="M22 12c0-5.5-4.5-10-10-10S2 6.5 2 12c0 4.9 3.5 9 8.1 9.9v-7h-2v-2.9h2V9.7c0-2 1.2-3.1 3.1-3.1.9 0 1.9.1 2.7.1v3h-1.8c-1.4 0-1.6.7-1.6 1.6v2h3.1l-.4 2.9h-2.7v7C18.5 21 22 16.9 22 12z" />
                    </svg>
                    Sign in with Facebook
                </button>
            </div>

            <!-- Bouton Instagram -->
            <div>
                <button class="social-button instagram">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#E4405F"
                            d="M12 7.2c-2.7 0-4.8 2.2-4.8 4.8s2.2 4.8 4.8 4.8 4.8-2.2 4.8-4.8-2.2-4.8-4.8-4.8zM7.7 2h8.6C18.5 2 20 3.5 20 5.7v8.6c0 2.2-1.5 3.7-3.7 3.7H7.7C5.5 18 4 16.5 4 14.3V5.7C4 3.5 5.5 2 7.7 2zm6.3 3.4c0 .4-.3.7-.7.7h-2c-.4 0-.7-.3-.7-.7v-2c0-.4.3-.7.7-.7h2c.4 0 .7.3.7.7v2z" />
                    </svg>
                    Sign in with Instagram
                </button>
            </div>

            <!-- Bouton Twitter -->
            <div>
                <button class="social-button twitter">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#1DA1F2"
                            d="M23 3a10.9 10.9 0 0 1-3.2 1.3A4.5 4.5 0 0 0 22.4.4a9 9 0 0 1-3 1.1A4.5 4.5 0 0 0 16.3 0C13.3 0 11 2.4 11 5.2a9 9 0 0 0 .2 1.2A12.8 12.8 0 0 1 1.6.9 4.5 4.5 0 0 0 3 7.5c-.5-.1-1-.2-1.5-.4v.1c0 2.3 1.6 4.2 3.8 4.7a4.5 4.5 0 0 1-2 .1c.5 1.8 2 3 3.8 3.1A9 9 0 0 1 1 19c-.4 0-.8 0-1.2-.1A12.7 12.7 0 0 0 7.2 21c7.9 0 12.4-6.4 12.4-11.9 0-.2 0-.5 0-.7A8.9 8.9 0 0 0 23 3z" />
                    </svg>
                    Sign in with Twitter
                </button>
            </div>

            <div>
                <button class="social-button youtube">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#FF0000"
                            d="M23.5 6.4c-.3-1.2-1.2-2.1-2.4-2.4C19.3 3.5 12 3.5 12 3.5s-7.3 0-9.1.5c-1.2.3-2.1 1.2-2.4 2.4C0 8.3 0 12 0 12s0 3.7.5 5.6c.3 1.2 1.2 2.1 2.4 2.4 1.8.5 9.1.5 9.1.5s7.3 0 9.1-.5c1.2-.3 2.1-1.2 2.4-2.4.5-1.8.5-5.6.5-5.6s0-3.7-.5-5.6zM9.8 15.4V8.6l6.5 3.4-6.5 3.4z" />
                    </svg>
                    Sign in with YouTube
                </button>
            </div>
            <div>
                <div>
                    <button class="social-button linkedin">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="#0077B5"
                                d="M20.45 3H3.55A1.5 1.5 0 0 0 2 4.5v15c0 .83.67 1.5 1.5 1.5h16.9c.83 0 1.5-.67 1.5-1.5v-15A1.5 1.5 0 0 0 20.45 3zm-12 16h-3v-9h3v9zm-1.5-10.27a1.8 1.8 0 1 1 0-3.6 1.8 1.8 0 0 1 0 3.6zm13.5 10.27h-3v-4.72c0-1.13-.41-1.9-1.42-1.9-.77 0-1.23.52-1.43 1.02-.07.17-.09.4-.09.63v5h-3s.04-8.12 0-9h3v1.28c.4-.62 1.1-1.5 2.67-1.5 1.95 0 3.42 1.28 3.42 4.03v5.19z" />
                        </svg>
                        Sign in with LinkedIn
                    </button>
                </div>
            </div>
            <div>
                <button class="social-button github">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#181717"
                            d="M12 .5C5.7.5.5 5.7.5 12c0 5.1 3.3 9.3 7.9 10.8.6.1.8-.2.8-.5v-1.9c-3.2.7-3.9-1.5-3.9-1.5-.5-1.1-1.2-1.5-1.2-1.5-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.6 1.6.3 2.2-.8.4-1.5.1-1.7 0-.3-.4-.9-1.1-.8-1.5-.1-.2-.1-.3-.2-.5s.3-.1.5-.2c.7-.1 1.5.5 1.6.9 0 0 .5.8.5 1.7 0 .7-.1 1.2.1 1.3.4.2 1.2.3 2.5.2s3.3-.6 3.3-.6.3-.7.3-.8c.5-.1.7-1.2.7-1.2.3-1.2.8-1.6 1.3-1.8s.4-.5.8-.9c.2-.2.2-.5.3-.7.1-.4-.1-.6.4-.8-.4-.6-.8-.9-1.1-1.2-.3-.3-.4-.5-.4-.6 0-.4 1-1 2.1-1 1.1 0 2.4.7 2.5 1 1.1 1 1.8 2.2 2.1 3.6.2.7.3 1.1.3 1.1-.7-.1-.9-1.4-1.8-1.3-.3 0-.5.2-.8.5s-.4.3-.6.6-.3.4-.3.4c-.4.5-.7.8-.9.9s-.5.4-.7.5c0 .2.3.4.8.6 1 .4 2.1.4 3.2.4s3.3-1.3 4.4-3c.7-1.1.7-2.5.5-3.6-.1-.7-.2-1.1-.3-1.4-.2-.5-.3-.8-.5-1.1-.3-.6-.7-.7-1.2-1.4-.4-.7-.9-.7-1.5-.8z" />
                    </svg>
                    Sign in with GitHub
                </button>
            </div>
            <div>
                <button class="social-button slack">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#4A154B"
                            d="M6.1 15.1c-.8 0-1.5.6-1.5 1.5 0 .8.6 1.5 1.5 1.5.8 0 1.5-.6 1.5-1.5 0-.8-.7-1.5-1.5-1.5zM4.5 15.1c-.8 0-1.5-.6-1.5-1.5s.6-1.5 1.5-1.5 1.5.6 1.5 1.5-.7 1.5-1.5 1.5zm4.5-9c.8 0 1.5-.6 1.5-1.5S9.8 3 9 3s-1.5.6-1.5 1.5.6 1.5 1.5 1.5zM9 4.5c.8 0 1.5-.6 1.5-1.5S9.8 1.5 9 1.5s-1.5.6-1.5 1.5S8.2 4.5 9 4.5zm10.5 5.1c0-.8-.6-1.5-1.5-1.5-.8 0-1.5.6-1.5 1.5 0 .8.6 1.5 1.5 1.5s1.5-.6 1.5-1.5zm-6 1.5c.8 0 1.5-.6 1.5-1.5s-.6-1.5-1.5-1.5c-.8 0-1.5.6-1.5 1.5s.6 1.5 1.5 1.5zm0 7.6c-.8 0-1.5.6-1.5 1.5s.6 1.5 1.5 1.5c.8 0 1.5-.6 1.5-1.5s-.6-1.5-1.5-1.5z" />
                    </svg>
                    Sign in with Slack
                </button>
            </div>
        </div>

    </div>
</template>

<style>
.social-button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 0.5rem;
    transition: background-color 0.2s;
}

.social-button:hover {
    background-color: #f0f0f0;
}

.icon {
    height: 1.25rem;
    /* 20px */
    width: 1.25rem;
    margin-right: 0.5rem;
}

.google .icon {
    fill: #4285F4;
}

.facebook .icon {
    fill: #1877F2;
}

.instagram .icon {
    fill: #E4405F;
}

.twitter .icon {
    fill: #1DA1F2;
}
</style>
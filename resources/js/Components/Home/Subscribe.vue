<script setup>
    import { Send } from 'lucide-vue-next';
</script>

<template>
    <div class="max-w-screen-2xl mx-auto flex flex-col items-center justify-center md:flex-row md:space-x-8 py-12">
        <!-- Image Section -->
        <div class="flex-shrink-0">
            <img src="/images/subscribe.png" alt="Subscription Image" class="w-40 h-auto object-cover" />
        </div>

        <!-- Text Section -->
        <div class="text-center md:text-left">
            <p class="font-pacifico text-3xl font-semibold text-black">Subscribe Us Now</p>
            <p class="text-gray-600 mt-2">Get more news and delicious dishes every day from us</p>
        </div>

        <!-- Email Input Section -->
        <div class="mt-6 md:mt-0">
            <label for="email" class="relative flex items-center">
                <input 
                    type="email" 
                    placeholder="Email" 
                    class="w-full max-w-xs bg-gray-300 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-400 placeholder-gray-500"
                />
                <Send class="absolute right-3 text-orange-500 cursor-pointer"/>
            </label>
        </div>
    </div>
</template>

<style>
</style>

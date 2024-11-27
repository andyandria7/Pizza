<script setup>
import { LucideFacebook, LucideInstagram, LucideTwitter, LucideLinkedin, MapPin, Smartphone,Mail   } from 'lucide-vue-next';
import OpenHour from '../Card/OpenHour.vue';

</script>

<template>
    <div class="relative z-10 footer text-white flex lg:flex-row flex-col max-w-screen-2xl mx-auto pt-20">
        <div class="px-10 lg:w-[60%]">
            <div class="flex justify-between ">
                <a href="/" class="flex items-center gap-2" data-aos="flip-right" data-aos-duration="2000"
                    data-aos-easing="ease-out-cubic">
                    <img src="/icons/logo.svg" alt="">
                    <h1 class="font-extrabold text-2xl">Pizza</h1>
                </a>
                <div class="flex gap-4 mt-4">
                    <LucideFacebook class="w-6 h-6 hover:text-blue-600" />
                    <LucideInstagram class="w-6 h-6 hover:text-pink-600" />
                    <LucideTwitter class="w-6 h-6 hover:text-blue-400" />
                    <LucideLinkedin class="w-6 h-6 hover:text-blue-800" />
                </div>
            </div>
            <p class="font-nunito my-7 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
            <hr class="text-white">
            <div class="flex flex-col lg:flex-row gap-7 mt-4">
                <!-- Location Info -->
                <div class="flex flex-col lg:flex-row gap-4 items-center">
                    <div class="flex items-center gap-4">
                        <div class="border-b-2 w-12 pt-5">
                            <MapPin size="50" />
                        </div>
                        <div class="text-center lg:text-left text-[11px] space-y-3">
                            <p>157 White Oak Drive Kansas City</p>
                            <p>689 Lynn Street South Boston</p>
                        </div>
                    </div>
                </div>
                <!-- Phone Info -->
                <div class="flex flex-col lg:flex-row gap-4 items-center">
                    <div class="flex items-center gap-4">
                        <div class="border-b-2 w-12 pt-5">
                            <Smartphone size="50" />
                        </div>
                        <div class="text-center lg:text-left text-[11px] space-y-3">
                            <a href="tel:(617)-276-8031">(617)-276-8031</a>
                            <a href="tel:(617)-276-8031">(617)-276-8031</a>
                        </div>
                    </div>
                </div>
                <!-- Email Info -->
                <div class="flex flex-col lg:flex-row gap-4 items-center">
                    <div class="flex items-center gap-4">
                        <div class="border-b-2 w-12 pt-5">
                            <Mail size="50" />
                        </div>
                        <div class="text-center lg:text-left text-[11px] space-y-3 flex flex-col mt-5">
                            <a href="mailto:andy@anthony.com">andy@anthony.com</a>
                            <a href="mailto:andy@anthony.com">andy@anthony.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-[40%] flex justify-center items-center my-10 lg:my-0">
            <OpenHour/>
        </div>
    </div>
</template>

<style>
.footer {
    background-image: url('/images/testi.jpg');
    background-blend-mode: multiply;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-color: rgba(0, 0, 0, 0.5);
}
</style>
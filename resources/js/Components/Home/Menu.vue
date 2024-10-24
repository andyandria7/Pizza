<script setup>
import Primary from '../Button/Primary.vue';


</script>

<template>
    <div class="flex flex-col items-center my-14">
        <div class="flex items-center justify-center">
            <div class="flex items-center gap-4" data-aos="fade-right" 
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine" >
                <div class="h-2 w-20 bg-orangePizza"></div>
                <p class="font-pacifico text-orangePizza text-2xl">About us</p>
                <div class="h-2 w-20 bg-orangePizza"></div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center gap-10 p-6 max-w-screen-2xl mx-auto">
            <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="300">
                <img class="h-80 p-4" src="/images/menu.svg" alt="">
            </div>
            <div class="space-y-4">
                <div class="flex gap-4" data-aos="fade-right" data-aos-delay="300">
                    <div>
                        <p class="font-pacifico text-lg mb-2">The Cracker Barrel's Country Boy Breakfast</p>
                        <p class="font-nunito">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <p class="text-lg text-orangePizza font-extrabold">25K</p>
                        <Primary class="h-8 flex items-center ">ORDER</Primary>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-right" data-aos-delay="400">
                    <div>
                        <p class="font-pacifico text-lg mb-2">The Cracker Barrel's Country Boy Breakfast</p>
                        <p class="font-nunito">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <p class="text-lg text-orangePizza font-extrabold">25K</p>
                        <Primary class="h-8 flex items-center ">ORDER</Primary>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-right" data-aos-delay="500">
                    <div>
                        <p class="font-pacifico text-lg mb-2">The Cracker Barrel's Country Boy Breakfast</p>
                        <p class="font-nunito">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <p class="text-lg text-orangePizza font-extrabold">25K</p>
                        <Primary class="h-8 flex items-center ">ORDER</Primary>
                    </div>
                </div >
                <div class="flex gap-4" data-aos="fade-right" data-aos-delay="600">
                    <div>
                        <p class="font-pacifico text-lg mb-2">The Cracker Barrel's Country Boy Breakfast</p>
                        <p class="font-nunito">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <p class="text-lg text-orangePizza font-extrabold">25K</p>
                        <Primary class="h-8 flex items-center ">ORDER</Primary>
                    </div>
                </div>
            </div>
        </div>
        <Primary>MORE MENU</Primary>
    </div>
</template>

<style></style>
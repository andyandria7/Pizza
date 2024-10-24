<script setup>
import Primary from '../Button/Primary.vue';


</script>

<template>
    <div class="sectionAbout py-10 ">
        <div class="flex flex-col lg:flex-row max-w-screen-2xl mx-auto items-center space-x-10 lg:ml-14 p-6">
            <div class="grid grid-cols-2 gap-4">
                <img class="rounded-lg shadow-lg" src="/images/resto1.svg" alt="resto1" data-aos="fade-down-right"
                    data-aos-delay="200">
                <img class="rounded-lg shadow-lg" src="/images/resto2.svg" alt="resto2" data-aos="fade-down-left"
                    data-aos-delay="400">
                <img class="rounded-lg shadow-lg" src="/images/pizza1.svg" alt="pizza1" data-aos="fade-up-right"
                    data-aos-delay="500">
                <img class="rounded-lg shadow-lg" src="/images/pizza2.svg" alt="pizza2" data-aos="fade-up-left"
                    data-aos-delay="600">
            </div>
            <div class="space-y-4 text-white pr-20 w-96 lg:w-auto lg:lg-0">
                <div class="flex items-center gap-4" 
                        data-aos="fade-right" 
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                    <p class="font-pacifico text-orangePizza text-2xl" 
                        >About us</p>
                    <div class="h-2 w-20 bg-orangePizza"></div>
                </div>
                <div class="flex font-nunito font-bold lg:text-4xl text-3xl items-center gap-2">
                    <h2 class="" data-aos="fade-right" 
                    data-aos-offset="300"
                    data-aos-delay="400"
                    data-aos-easing="ease-in-sine">Welcome to </h2>
                    <img src="/icons/food.svg" alt="" data-aos="fade-right" 
                    data-aos-offset="400"
                    data-aos-delay="600"
                    data-aos-easing="ease-in-sine">
                    <h2 class="text-orangePizza"
                    data-aos="fade-right" 
                    data-aos-offset="500"
                    data-aos-delay="800"
                    data-aos-easing="ease-in-sine"
                    >Pizzeria</h2>
                </div>
                <div class="text-lg font-nunito " data-aos="fade-right" 
                    data-aos-offset="500"
                    data-aos-delay="900"
                    data-aos-easing="ease-in-sine">
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat
                        ipsum et lorem et sit, sed stet lorem sit.</p>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat
                        ipsum </p>
                    <div class="flex lg:gap-10 gap-4 py-6">
                        <div class="flex font-nunito items-center border-l-8 border-orangePizza space-x-3 lg:space-x-5">
                            <h1 class="text-4xl font-bold text-orangePizza ml-3 lg:ml-5">15</h1>
                            <div class="">
                                <p>Years of</p>
                                <h3>Experience</h3>
                            </div>
                        </div>
                        <div class="flex font-nunito items-center border-l-8 border-orangePizza space-x-3 lg:space-x-5">
                            <h1 class="text-4xl font-bold text-orangePizza ml-3 lg:ml-5">15</h1>
                            <div class="">
                                <p>Years of</p>
                                <h3>Experience</h3>
                            </div>
                        </div>
                    </div>
                    <Primary class="m-4">READ MORE</Primary>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.sectionAbout {
    background-image: url("/images/about-bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
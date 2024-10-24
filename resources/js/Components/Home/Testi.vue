<script setup>
import Info from '../Empyer/Info.vue';


</script>

<template>
    <div class="testbg max-w-screen-2xl mx-auto py-10">
        <div class="flex items-center justify-center py-7">
            <div class="flex items-center gap-4" data-aos="fade-right" data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <div class="h-2 w-20 bg-orangePizza"></div>
                <p class="font-pacifico text-orangePizza text-2xl">Testimonial</p>
                <div class="h-2 w-20 bg-orangePizza"></div>
            </div>
        </div>
        <div class="font-nunito text-white ">
            <h1 class="text-5xl text-center">Our Customer Says</h1>
            <Info data-aos="fade-right" data-aos-offset="600" data-aos-easing="ease-in-sine"
                desc="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae, culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae veritatis adipisci a!"
                user="Timothy Doe" metier="Customer" />
            <Info
            data-aos="fade-left"
     data-aos-offset="500"
     data-aos-easing="ease-in-sine"
                desc="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae, culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae veritatis adipisci a!"
                user="Tracey Lewis" metier="Designer" />
            <Info
            data-aos="fade-right"
     data-aos-offset="500"
     data-aos-easing="ease-in-sine"
                desc="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae, culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae veritatis adipisci a!"
                user="Sarah  Ruiz" metier="Director" />

        </div>
    </div>
</template>

<style>
.testbg {
    background-image: url('/images/testi.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
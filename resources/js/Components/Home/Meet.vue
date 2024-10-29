<script setup>
import CardMeet from '../Card/CardMeet.vue';


</script>

<template>
    <div class="max-w-screen-2xl mx-auto py-10 meet">
        <div class="flex items-center justify-center py-7">
            <div class="flex items-center gap-4" data-aos="fade-right" data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <div class="h-2 w-20 bg-orangePizza"></div>
                <p class="font-pacifico text-orangePizza text-2xl">Meet Our</p>
                <div class="h-2 w-20 bg-orangePizza"></div>
            </div>
        </div>
        <div>
            <h1 class="text-5xl text-center font-bold">Our Customer Says</h1>
            <div class="flex flex-col lg:flex-row items-center justify-center">
                <CardMeet
                img="/images/team_1.png"
                name="Teresa Doe"
                rols="Head Chef"
                data-aos="fade-down-right"
                data-aos-offset="300"
                data-aos-delay="1000"
                />
                <CardMeet
                img="/images/team-2.png"
                name="John Doe"
                rols="Head Chef"
                data-aos="fade-down"
                data-aos-offset="300"
                data-aos-delay="1200"
                
                />
                <CardMeet
                img="/images/team-3.png"
                name="John Doe"
                rols="Head Chef"
                data-aos="fade-down-left"
                data-aos-offset="300"
                data-aos-delay="1100"

                />
            </div>
        </div>
    </div>
</template>

<style>
.custom-shadow {
    box-shadow: 0 -20px 50px rgba(0, 0, 0, 0.8);
}
.meet{
    overflow: hidden;
}
</style>
<script setup>
import { Utensils, Wine, House, Bike   } from 'lucide-vue-next';
import RoundCard from '../Card/RoundCard.vue';
</script>

<template>
    <div class="py-10 max-w-screen-2xl mx-auto service">
        <div class="flex items-center justify-center py-7">
            <div class="flex items-center gap-4" data-aos="fade-right" data-aos-delay="200"  data-aos-offset="700">
                <div class="h-2 w-20 bg-orangePizza"></div>
                <p class="font-pacifico text-orangePizza text-2xl" >Our Services</p>
                <div class="h-2 w-20 bg-orangePizza"></div>
            </div>
        </div>
        <h1 class="text-5xl text-center font-bold" data-aos="fade-left" data-aos-offset="700">Our Customer Says</h1>

        <div class="flex items-center justify-center gap-10">
            <RoundCard :icon="Utensils" title="Reservation"
                description="Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et" :number="1" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500"/>
            <RoundCard :icon="Wine" title="Private Event"
                description="Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et" :number="2" data-aos="fade-up" data-aos-duration="3000"/>
            <RoundCard :icon="House" title="Online Order"
                description="Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et" :number="3"data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500"/>
            <RoundCard :icon="Bike" title="Fast Delivery"
                description="Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et" :number="4" data-aos="fade-up" data-aos-duration="3000"/>
        </div>
        
    </div>
</template>

<style>
.service{
    overflow-x: hidden;
}
</style>
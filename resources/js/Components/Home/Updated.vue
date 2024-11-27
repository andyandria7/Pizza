<script setup>
import { Eye, MessageCircle } from 'lucide-vue-next';
import UpdateCard from '../Card/UpdateCard.vue';
</script>

<template>
    <div class="testi">
        <div class="flex items-center justify-center py-7">
            <div class="flex items-center gap-4" data-aos="fade-right" data-aos-delay="200" data-aos-offset="700">
                <div class="h-2 w-20 bg-orangePizza"></div>
                <p class="font-pacifico text-orangePizza text-2xl">Updated from</p>
                <div class="h-2 w-20 bg-orangePizza"></div>
            </div>
        </div>
        <h1 class="text-5xl text-white text-center font-bold" data-aos="fade-left" data-aos-offset="700">Our Featured
            Blog</h1>
        <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-9">
            <UpdateCard 
            :icons1="Eye"
            number1="18"
            :icons2="MessageCircle"
            number2="18"
            info="Post By Admin"
            img="/images/pizzaupdate.svg"
            title="How To Cook The Spicy Chinese Noodle For Cold Weather"
            desciption="Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            data-aos="fade-right"
            data-aos-offset="500"
            data-aos-easing="ease-in-sine"
            
            />
            <UpdateCard 
            :icons1="Eye"
            number1="18"
            :icons2="MessageCircle"
            number2="18"
            info="Post By Admin"
            img="/images/pizzaupdate.svg"
            title="How To Cook The Spicy Chinese Noodle For Cold Weather"
            desciption="Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500"
            data-aos-offset="500"
            />
            <UpdateCard 
            :icons1="Eye"
            number1="18"
            :icons2="MessageCircle"
            number2="18"
            info="Post By Admin"
            img="/images/pizzaupdate.svg"
            title="How To Cook The Spicy Chinese Noodle For Cold Weather"
            desciption="Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            data-aos="fade-left"
            data-aos-offset="500"
            data-aos-easing="ease-in-sine"
            />
           
        </div>
    </div>
</template>

<style>
.testi {
    overflow-x: hidden;
    background-image: url('/images/testi.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
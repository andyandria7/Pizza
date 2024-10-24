<script setup>
import Card from '../Card/Card.vue';


</script>

<template>
    <div class="max-w-screen-2xl mx-auto flex flex-col lg:flex-row lg:gap-0 gap-4 items-center justify-center my-20 card ">
        <Card 
        data-aos="fade-right"
        data-aos-easing="ease-in-sine"
        data-aos-delay="500"
        image="/icons/user.svg" 
        title="Master Chefs"
        description="Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam" />
        <Card 
        data-aos="fade-down"
        data-aos-easing="ease-in-sine"
        data-aos-delay="700"
        image="/icons/food.svg"
        title="Quality Food"
        description="Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam" />
        <Card 
        data-aos="fade-down"
        data-aos-easing="ease-in-sine"
        data-aos-delay="800"
        image="/icons/vector.svg"
        title="Online Order"
        description="Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam" />
        <Card 
        data-aos="fade-left"
        data-aos-easing="ease-in-sine"
        data-aos-delay="900"
        image="/icons/Headset.svg"
        title="24/7 Service"
        description="Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam" />
    </div>
</template>

<style>

.card{
    overflow: hidden;
}
</style>
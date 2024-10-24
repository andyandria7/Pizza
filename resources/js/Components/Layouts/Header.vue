<script setup>
import { onMounted } from 'vue';
import Primary from '../Button/Primary.vue';
import Navbar from './Navigation/Navbar.vue';
import 'aos/dist/aos.css';
import AOS from 'aos';

onMounted(() => {
    // Refresh AOS when component is mounted
    AOS.refresh();
});
</script>

<template>
      <header class="headerPizza relative text-white font-nunito">
        <Navbar/>
        <article class="flex justify-between items-center max-w-screen-2xl mx-auto py-24 px-10">
            <div class="w-[50%]" >
                <div class="lg:text-6xl text-3xl font-bold mb-10" data-aos="fade-right" data-aos-delay="300">
                    <h1>Enjoy Our</h1>
                    <h1>Delicious Pizza</h1>
                </div>
                <p class="mb-10" data-aos="fade-right" data-aos-delay="600">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. 
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, 
                    sed stet lorem sit clita duo justo magna dolore erat amet.
                </p>
                <Primary data-aos="fade-left" >
                    Book a table
                </Primary>
            </div>
            <div class="w-[70%] absolute lg:right-28 right-0" data-aos="fade-down-left">
                <img src="/icons/pizzaHeader.svg" alt="Pizza" class="w-full object-contain ">
            </div>
        </article>
    </header>
</template>

<style>
.headerPizza{
    background-image: url("/public/images/image.png");
    background-repeat: no-repeat;
    background-size: cover;
}

.rotate{
  animation: imgRotate 50s linear infinite;
}

@keyframes imgRotate {
    100%{
        transform: rotate(360deg);
    }
}

</style>
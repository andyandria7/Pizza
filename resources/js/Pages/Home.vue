<script setup>
import Primary from "@/Components/Button/Primary.vue";
import About from "@/Components/Home/About.vue";
import Content from "@/Components/Home/Content.vue";
import Meet from "@/Components/Home/Meet.vue";
import Menu from "@/Components/Home/Menu.vue";
import Reservation from "@/Components/Home/Reservation.vue";
import Service from "@/Components/Home/Service.vue";
import Subscribe from "@/Components/Home/Subscribe.vue";
import Testi from "@/Components/Home/Testi.vue";
import Updated from "@/Components/Home/Updated.vue";
import Layout from "@/Components/Layouts/Layout.vue";
import Typewriter from "@/Components/Layouts/Other/Typewriter.vue";


</script>

<template>
    <Layout>
        <header class="headerPizza relative text-white font-nunito">
            <article class="flex justify-between items-center max-w-screen-2xl mx-auto py-5 px-10">
                <div class="w-[50%]">
                    <div class="lg:text-6xl  w-64 lg:w-auto text-3xl font-bold mb-10" data-aos="fade-right"
                        data-aos-delay="300">
                        <!-- <h1>Enjoy Our</h1>
                    <h1>Delicious Pizza</h1> -->
                        <Typewriter class="text-2xl lg:text-6xl" />
                    </div>
                    <p class="mb-10" data-aos="fade-right" data-aos-delay="600">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo magna dolore erat amet.
                    </p>
                    <Primary data-aos="fade-left">
                        Book a table
                    </Primary>
                </div>
                <div class=" lg:right-28 right-0 " data-aos="fade-down-left">
                    <img src="/images/pizza.gif" alt="Pizza" class=" object-contain w-96 rotate">
                </div>
            </article>
        </header>
        <Content />
        <About />
        <Menu />
        <Testi />
        <Meet />
        <Reservation />
        <Service />
        <Updated />
        <Subscribe />
    </Layout>
</template>

<style>
.headerPizza {
    overflow: hidden;
    background-image: url("/public/images/image.png");
    background-repeat: no-repeat;
    background-size: cover;
}

.rotate {
    animation: imgRotate 50s linear infinite;
}

@keyframes imgRotate {
    100% {
        transform: rotate(360deg);
    }
}
</style>
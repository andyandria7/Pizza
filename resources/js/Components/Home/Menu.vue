<script setup>
import { onMounted, onBeforeUnmount } from 'vue';
import Primary from '../Button/Primary.vue';

function updateAOSOffset() {
    const aosItems = document.querySelectorAll('.aos-item');
    
    aosItems.forEach(item => {
        if (window.innerWidth < 768) {  // Pour les petits écrans (mobile)
            item.setAttribute('data-aos-offset', '200');
        } else if (window.innerWidth < 1024) {  // Pour les écrans moyens (tablettes)
            item.setAttribute('data-aos-offset', '400');
        } else {  // Pour les grands écrans (desktop)
            item.setAttribute('data-aos-offset', '700');
        }
    });
}

// Mettre à jour lors du chargement de la page et lors du redimensionnement
onMounted(() => {
    updateAOSOffset(); // Appelle la fonction au chargement du composant
    window.addEventListener('resize', updateAOSOffset); // Ajoute l'écouteur d'événement pour redimensionnement
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', updateAOSOffset); // Supprime l'écouteur lors de la destruction du composant
});
</script>

<template>
    <div class="flex flex-col items-center my-14 max-w-screen-2xl mx-auto">
        <div class="flex items-center justify-center">
            <div class="flex items-center gap-4" data-aos="fade-right" 
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine" >
                <div class="h-2 w-20 bg-orangePizza"></div>
                <p class="font-pacifico text-orangePizza text-2xl">Our Menu</p>
                <div class="h-2 w-20 bg-orangePizza"></div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center gap-10 p-6 max-w-screen-2xl mx-auto">
            <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="300">
                <img class="h-80 p-4" src="/images/menu.svg" alt="">
            </div>
            <div class="space-y-4">
                <div class="flex gap-4" data-aos="fade-right" data-aos-offset="500">
                    <div>
                        <p class="font-pacifico text-lg mb-2">The Cracker Barrel's Country Boy Breakfast</p>
                        <p class="font-nunito">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <p class="text-lg text-orangePizza font-extrabold">25K</p>
                        <Primary class="h-8 flex items-center ">ORDER</Primary>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-right" data-aos-offset="500">
                    <div>
                        <p class="font-pacifico text-lg mb-2">The Cracker Barrel's Country Boy Breakfast</p>
                        <p class="font-nunito">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <p class="text-lg text-orangePizza font-extrabold">25K</p>
                        <Primary class="h-8 flex items-center ">ORDER</Primary>
                    </div>
                </div>
                <div class="flex gap-4" data-aos="fade-right" data-aos-offset="500">
                    <div>
                        <p class="font-pacifico text-lg mb-2">The Cracker Barrel's Country Boy Breakfast</p>
                        <p class="font-nunito">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <p class="text-lg text-orangePizza font-extrabold">25K</p>
                        <Primary class="h-8 flex items-center ">ORDER</Primary>
                    </div>
                </div >
                <div class="flex gap-4" data-aos="fade-right" data-aos-offset="500">
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

<style>

</style>
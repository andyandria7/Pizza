<script setup>
import { Phone, Users, Calendar, Clock } from 'lucide-vue-next';
import Primary from '../Button/Primary.vue';

const date = [
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
  "Sunday"
]

const time = [
  "12:00 PM",
  "1:00 PM",
  "2:00 PM",
  "6:00 PM",
  "7:00 PM",
  "8:00 PM"
]
</script>

<template>
  <div class="grid lg:grid-cols-2 max-w-screen-2xl mx-auto">
    <div class="bg-black text-white font-nunito">
      <div class="flex items-center justify-center py-7">
        <div class="flex items-center gap-4" data-aos="fade-right" data-aos-offset="600" data-aos-easing="ease-in-sine">
          <div class="h-2 w-20 bg-orangePizza"></div>
          <p class="font-pacifico text-orangePizza text-2xl" >Make A Reservation</p>
          <div class="h-2 w-20 bg-orangePizza"></div>
        </div>
      </div>
      <div class="text-sm text-center h-80" >
        <div data-aos="fade-left" data-aos-offset="700">
          <span>You can call us directly at </span>
          <span class="text-orangePizza">225-88888</span>
        </div>
        <div class="grid grid-cols-2 gap-4 px-10 mb-6 my-10">
          <!-- Champ avec icône téléphone -->
          <div class="relative flex items-center" data-aos="fade-down-right" data-aos-delay="200"  data-aos-offset="700">
            <Phone class="text-gray-400 absolute left-3 w-5 h-5" />
            <input type="text" placeholder="Number"
              class="bg-gray-700 text-white py-2 pl-10 pr-4 rounded flex items-center gap-2 w-full">
          </div>

          <!-- Dropdown pour le nombre d'invités -->
          <div class="relative flex items-center" data-aos="fade-down-left" data-aos-delay="400"  data-aos-offset="700">
            <Users class="text-gray-400 absolute left-3 w-5 h-5" />
            <select class="bg-gray-700 text-white py-2 pl-10 pr-4 rounded w-full appearance-none">
              <option disabled selected>Guests</option>
              <option v-for="n in 5" :key="n">{{ n }}</option>
              <option>5+</option>
            </select>
          </div>

          <!-- Champ avec icône calendrier -->
          <div class="relative flex items-center" data-aos="fade-up-right" data-aos-delay="500"  data-aos-offset="700">
            <Calendar class="text-gray-400 absolute left-3 w-5 h-5" />
            <select class="bg-gray-700 text-white py-2 pl-10 pr-4 rounded w-full appearance-none">
              <option disabled selected class="text-gray-400">Date</option>
              <option v-for="n in date" :key="n">{{ n }}</option>
            </select>
          </div>

          <!-- Dropdown pour l'heure -->
          <div class="relative flex items-center" data-aos="fade-up-left" data-aos-delay="600"  data-aos-offset="700">
            <Clock class="text-gray-400 absolute left-3 w-5 h-5" />
            <select class="bg-gray-700 text-white py-2 pl-10 pr-4 rounded w-full appearance-none">
              <option disabled selected>Time</option>
              <option v-for="n in time" :key="n">{{ n }}</option>
            </select>
          </div>
        </div>
        <Primary>FIND TABLE</Primary>
        <img class="absolute z-10 w-48 -mt-6" src="/images/findTable.png" alt="">
      </div>
      <div>

      </div>
    </div>
    <div data-aos="flip-right" data-aos-delay="1200" data-aos-duration="3000" data-aos-offset="200">
      <img src="/images/reservation.jpg" alt="">
    </div>
  </div>
</template>

<style></style>
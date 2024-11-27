<script setup>
import LayoutAuth from './layout/LayoutAuth.vue';
import { Line } from "vue-chartjs";
import {
    Chart,
    Title,
    Tooltip,
    Legend,
    LineElement,
    PointElement,
    CategoryScale,
    LinearScale,
} from "chart.js";
import { ref } from 'vue';

Chart.register(
    Title,
    Tooltip,
    Legend,
    LineElement,
    PointElement,
    CategoryScale,
    LinearScale
);

const data = ref({
    labels:  [ 'January', 'February', 'March' ],
    datasets: [
        {
            label: "Pizzas créées",
            borderColor: "rgb(75, 192, 192)",
            backgroundColor: "rgba(75, 192, 192, 0.2)",
            data: [5, 20, 40],
            tension: 0.4,
        },
        {
            label: "Pizzas delivrées",
            borderColor: "red",
            backgroundColor: "red",
            data: [5, 25, 40],
            tension: 0.4,
        },
    ],
});

const options = ref({
    responsive: true,
    plugins: {},
    scales: {
        y: {
            min: 0, // Set the minimum value for the y-axis
            // ticks: {
            //     stepSize: 1,
            // }
        },
    },
});
    
</script>

<template>
    <LayoutAuth>
        <Line
            :data="data"
            class="w-full bg-white p-2 rounded-2xl m-4 h-full mx-auto"
            :options="options"
        />
    </LayoutAuth>
</template>

<style>
    
</style>
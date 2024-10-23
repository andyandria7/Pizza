import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                pacifico: ['Pacifico', "sans-serif"],
                nunito:['Nunito','sans-serif']
            },
            colors:{
                "orangePizza": "#E5612F",
                "greyPizza":"#F3F5F6"

            }
        },
    },

    plugins: [forms],
};

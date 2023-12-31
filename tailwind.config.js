import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                color: {
                    pick1: '#FFFFEC',
                    pick2: '#F1E4C3',
                    pick3: '#C6A969',
                    pick4: '#597E52',
                    pick4hover: '#415c3b',
                }
            }
        },
    },
    variants: {
        extend: {
            display: ['group-focus']
        },
    },

    plugins: [forms],
};

import forms from '@tailwindcss/forms';
import defaultTheme from 'tailwindcss/defaultTheme';

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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'figtree-blue': '#006699',
                'figtree-green': '#009966',
                'figtree-red': '#CC0000',
                'figtree-yellow': '#FFCC00',
                'figtree-orange': '#FF9900',
                'figtree-purple': '#990099',
                'figtree-pink': '#CC0099',
                'figtree-gray': '#999999',
                'figtree-light-gray': '#CCCCCC',
                'figtree-dark-gray': '#666666',
                'figtree-black': '#000000',
                'figtree-white': '#FFFFFF',
                'one':'#F85E05'
            },
            backgroundImage: {
                'full-background': "url('public/images/background.jpg')",
              },
              width: {
                '70': '70%',
              },
        },
    },

    plugins: [forms],
};
